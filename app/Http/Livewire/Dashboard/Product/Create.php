<?php

namespace App\Http\Livewire\Dashboard\Product;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    // listener
    protected $listeners = [
        'removePhoto' => 'removePhoto',
        'addPhoto' => 'addPhoto',
        'closeModal' => 'closeModal',
    ];

    // protected $listeners = ['confirm' => 'confirmLogout'];



    // Variable
    public $productId, $categoryData;
    public $name, $price, $tag, $category, $description, $additional_information, $slug;
    public $benefits = [];
    public $photo = [];
    public $success;
    public $error = [];
    public $deletedPhotos = [];

    public function mount($productId = null)
    {
        $this->productId = $productId;
        $this->success = false;

        $this->getCategory();

        if ($this->productId) {
            $this->loadProductData();
        }
    }

    public function loadProductData()
    {
        $product = Product::findOrFail($this->productId);
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->price = number_format($product->price, 0, '.', '');
        $this->tag = $product->tag;
        $this->category = $product->category_id;
        $this->description = $product->description;
        $this->additional_information = $product->additional_information;
        $this->benefits = json_decode($product->benefits);

        // Mengubah string JSON menjadi array dari URL foto
        $photoUrls = json_decode($product->photo, true);

        // Mendapatkan URL publik untuk setiap foto menggunakan Storage
        $this->photo = [];

        if ($photoUrls) {
            $this->photo = array_map(function ($photo) {
                $url = Storage::url($photo);
                $parsedUrl = parse_url($url);
                $path = ltrim($parsedUrl['path'], '/storage/');
                return $path;
            }, $photoUrls);
        }
        // dd($this->photo);

    }

    public function closeModal()
    {
        session()->forget('success');
    }

    public function render()
    {
        $breadcrumb = $this->breadcrumb();

        return view('dashboard.product.create', compact('breadcrumb'))
            ->layout('layouts.dashboard.app')
            ->layoutData([
                'title' => $this->productId ? 'Edit Produk' : 'Tambah Produk',
                'breadcrumb' => $breadcrumb,
            ]);
    }

    public function breadcrumb()
    {
        $breadcrumb = [
            [
                'label' => 'Dashboard',
                'link' => route('dashboard.index'),
            ],
            [
                'label' => 'Produk',
                'link' => route('dashboard.product.index'),
            ],
        ];

        if ($this->productId) {
            $breadcrumb[] = [
                'label' => 'Edit Produk',
            ];
        } else {
            $breadcrumb[] = [
                'label' => 'Tambah Produk',
            ];
        }

        return $breadcrumb;
    }


    public function removePhoto($index)
    {
        if (isset($this->photo[$index])) {
            $deletedPhoto = $this->photo[$index];
            unset($this->photo[$index]);
            $this->photo = array_values($this->photo);

            if (is_string($deletedPhoto)) {
                // Jika foto yang dihapus adalah URL foto yang ada saat edit
                $this->deletedPhotos[] = $deletedPhoto;
            } elseif ($deletedPhoto instanceof \Illuminate\Http\UploadedFile) {
                // Jika foto yang dihapus adalah foto baru yang diunggah pada saat edit
                $deletedPhoto->delete();
            }
        }
    }

    protected function deleteDeletedPhotos()
    {
        foreach ($this->deletedPhotos as $deletedPhoto) {
            $deletedPath = public_path($deletedPhoto);
            if (file_exists($deletedPath)) {
                unlink($deletedPath);
            }
        }

        // Bersihkan daftar foto yang dihapus
        $this->deletedPhotos = [];
    }

    public function addPhoto($image, $index)
    {
        $maxFiles = 4; // Batas maksimal file yang diizinkan
        if (count($this->photo) < $maxFiles) {
            $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image)); 


            $this->photo[$index] = $imageData;
        } else {
            session()->flash('warning', 'Anda hanya dapat mengunggah maksimal ' . $maxFiles . ' file.');
            $this->photo = [];
        }
    }

    private function getImageExtensionFromBase64($base64Data)
    {
        $mime = explode(',', $base64Data)[0];
        $mime = str_replace('data:image/', '', $mime);
        $mime = str_replace(';base64', '', $mime);
        return $mime;
    }


    // public function addPhoto($image, $index)
    // {
    //     $maxFiles = 4; // Batas maksimal file yang diizinkan
    //     if (count($this->photo) < $maxFiles) {
    //         $this->photo[$index] = $image;
    //     } else {
    //         session()->flash('warning', 'Anda hanya dapat mengunggah maksimal ' . $maxFiles . ' file.');
    //         $this->photo = [];
    //     }
    // }



    public function addBenefit()
    {
        $previousBenefits = $this->benefits;
        $this->benefits = [];

        foreach ($previousBenefits as $benefit) {
            $this->benefits[] = $benefit;
        }

        $this->benefits[] = '';
    }


    public function removeBenefit($index)
    {
        unset($this->benefits[$index]);
        $this->benefits = array_values($this->benefits);
    }

    public function getCategory()
    {
        $categoryData = Category::all();
        $this->categoryData = $categoryData;
    }

    public function storeOrUpdateProduct()
    {
        try {
            $rules = [
                'name' => 'required|string|unique:products,name' . ($this->productId ? ',' . $this->productId : ''),
                'price' => 'required',
                'tag' => 'required|string',
                'category' => 'nullable|exists:categories,id',
                'description' => 'required|string',
                'photo.*' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
                'photo' => 'nullable|array|max:4',
                'benefits' => 'nullable|array',
                'benefits.*' => 'nullable|string',
                'additional_information' => 'nullable|string',
            ];

            $messages = [
                'name.required' => 'Kolom Nama produk harus diisi.',
                'name.unique' => 'Nama Produk sudah tersedia.',
                'price.required' => 'Kolom Harga harus diisi.',
                'tag.required' => 'Kolom Tag harus diisi.',
                'tag.string' => 'Kolom Tag harus berupa teks.',
                'category.exists' => 'Kategori yang dipilih tidak valid.',
                'description.required' => 'Kolom Deskripsi harus diisi.',
                'photo.*.image' => 'Kolom Foto harus berupa gambar.',
                'photo.*.mimes' => 'Kolom Foto hanya mendukung format JPEG, PNG, JPG.',
                'photo.*.max' => 'Ukuran Foto tidak boleh melebihi 5MB.',
                'photo.array' => 'Kolom Foto harus berupa array.',
                'photo.max' => 'Maksimal 4 file diizinkan.',
                'benefits.array' => 'Data harus berupa array.',
                'benefits.*.string' => 'Kolom Manfaat harus berupa teks.',
                'additional_information.string' => 'Kolom Informasi Tambahan harus berupa teks.',
            ];



            // Buat validator
            $validator = Validator::make($this->all(), $rules, $messages);

            // Lakukan validasi
            if ($validator->fails()) {
                $errors = $validator->errors()->toArray();

                // Tambahkan pesan error ke dalam variabel error di komponen, jika perlu
                foreach ($errors as $field => $fieldErrors) {
                    foreach ($fieldErrors as $error) {
                        $this->addError($field, $error);
                    }
                }
                $error = $errors;
            }
            // dd($this->all());


            $photos = [];

            if ($this->photo) {


                foreach ($this->photo as $file) {
                    if ($file instanceof \Illuminate\Http\UploadedFile && $file->isValid()) {
                        $filename = $file->hashName();
                        // Menggunakan Intervention Image untuk mengubah ukuran gambar
                        $image = Image::make($file->getRealPath());
                        $image->resize(500, 500, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });

                        // Simpan gambar ke dalam direktori storage/app/public/photos/product
                        $path = $file->storeAs('photos/product', $filename, 'public');


                        $photos[] = $path;
                    } elseif (is_string($file)) {
                        // Pastikan gambar yang diterima dalam format yang benar
                        $path = str_replace('/storage/', '', $file);

                        $photos[] = $path;
                    }
                }
            }


            if (!empty($photos)) {
                $photosJson = json_encode($photos);
            }

            // Format harga
            $price = str_replace(['IDR', '.', ','], '', $this->price);
            $formattedPrice = number_format((float) $price, 2, '.', '');



            $currentTime = Carbon::now('Asia/Jakarta');

            if ($this->productId) {

                // Mode edit, perbarui produk yang ada
                $product = Product::findOrFail($this->productId);

                // Perbarui data produk
                $product->name = $this->name;
                $product->slug = str_replace([' ', '/'], '-', $this->name);
                $product->price = $formattedPrice;
                $product->tag = $this->tag;
                $product->category_id = $this->category;
                $product->description = $this->description;
                $product->additional_information = $this->additional_information;
                $product->benefits = json_encode($this->benefits);
                $product->updated_at = $currentTime;

                // Jika ada perubahan foto, lakukan logika pembaruan foto sesuai kebutuhan
                if (!empty($photos)) {
                    $product->photo = $photosJson;
                } else {
                    // Jika tidak ada gambar yang dipilih, gunakan gambar yang ada sebelumnya
                    $product->photo = null;
                }

                // Simpan perubahan produk
                $product->save();

                // Hapus foto-foto yang tidak terpakai (unlink)
                $this->deleteDeletedPhotos();
            } else {

                // Mode create, buat produk baru
                $product = new Product;

                // Set data produk
                $product->name = $this->name;
                $product->slug = str_replace([' ', '/'], '-', $this->name);
                $product->price = $formattedPrice;
                $product->tag = $this->tag;
                $product->category_id = $this->category;
                $product->description = $this->description;
                $product->additional_information = $this->additional_information;
                $product->benefits = json_encode($this->benefits);
                $product->created_at = $currentTime;
                $product->updated_at = $currentTime;

                // Jika ada foto, lakukan logika pembaruan foto sesuai kebutuhan
                if (!empty($photos)) {
                    $product->photo = $photosJson;
                }



                // Simpan produk baru
                $product->save();
            }



            if ($product) {
                // Redirect ke halaman sukses
                $this->success = true;
                // $this->emit('closeModal');

                $message = $this->productId ? 'Produk berhasil diubah.' : 'Produk berhasil ditambahkan.';
                $this->resetAll();
                return redirect()->route('dashboard.product.index')->with('success', $message);
            } else {
                // Redirect ke halaman error
                session()->flash('error', 'Gagal menambahkan produk.');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return $th->getMessage();
        }
    }

    public function resetAll()
    {
        // Memanggil fungsi reset pada state komponen Livewire
        parent::reset();

        // Menghapus data inisialisasi atau mengatur ulang nilai properti yang digunakan untuk inisialisasi
        $this->productId = null;
        $this->categoryData = null;
        $this->name = null;
        $this->price = null;
        $this->tag = null;
        $this->category = null;
        $this->description = null;
        $this->additional_information = null;
        $this->slug = null;
        $this->benefits = [];
        $this->photo = [];
        $this->error = [];
        $this->deletedPhotos = [];
        $this->resetValidation();
        $this->resetErrorBag();
        $this->reset();
    }
}
