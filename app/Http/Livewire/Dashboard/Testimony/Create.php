<?php

namespace App\Http\Livewire\Dashboard\Testimony;

use App\Models\Testimony;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use Livewire\TemporaryUploadedFile;


class Create extends Component
{
    use WithFileUploads;

    // listener
    protected $listeners = [
        'closeModal' => 'closeModal',
        'removePhoto' => 'removePhoto'
    ];

    // protected $listeners = ['confirm' => 'confirmLogout'];

    // Variable
    public $testimonyId;
    public $title, $image;
    public $success;
    public $error = [];
    public $deletedPhotos;


    public function mount($testimonyId = null)
    {
        $this->testimonyId = $testimonyId;
        $this->success = false;

        if ($this->testimonyId) {
            $this->loadTestimonyData();
        }
    }

    public function loadTestimonyData()
    {
        $testimony = Testimony::findOrFail($this->testimonyId);
        $this->title = $testimony->title;
        $this->image = $testimony->image;

        // dd($this->image);
    }

    public function render()
    {
        $breadcrumb = $this->breadcrumb();

        return view('dashboard.testimony.create', compact('breadcrumb'))
            ->layout('layouts.dashboard.app')
            ->layoutData([
                'title' => $this->testimonyId ? 'Edit Testimoni' : 'Tambah Testimoni',
                'breadcrumb' => $breadcrumb,
            ]);
    }

    public function breadcrumb()
    {
        return [
            [
                'label' => 'Dashboard',
                'link' => route('dashboard.index'),
            ],
            [
                'label' => 'Testimoni',
                'link' => route('dashboard.testimony.index'),
            ],
            [
                'label' => 'Buat',
            ]
        ];
    }

    public function removePhoto()
    {
        if (isset($this->image)) {
            $deletedPhoto = $this->image;
            unset($this->image);

            if (is_string($deletedPhoto)) {
                // Jika foto yang dihapus adalah URL foto yang ada saat edit
                $this->deletedPhotos = $deletedPhoto;
            } elseif ($deletedPhoto instanceof TemporaryUploadedFile) {
                // Jika foto yang dihapus adalah foto baru yang diunggah pada saat edit
                $deletedPhoto->delete();
            }
        }
        // dd($this->image);
    }


    public function closeModal()
    {
        session()->forget('success');
    }

    public function storeOrUpdateProduct()
    {
        try {
            $rules = [
                'name' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            ];

            $messages = [
                'name.required' => 'Kolom Nama Testimoni harus diisi.',
                'image.required' => 'Kolom Foto harus diisi.',
                'image.image' => 'Kolom Foto harus berupa gambar.',
                'image.mimes' => 'Kolom Foto hanya mendukung format JPEG, PNG, JPG.',
                'image.max' => 'Ukuran Foto tidak boleh melebihi 5MB.',
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



            // if ($this->image) {
            //     $file = $this->image; // Mengambil elemen pertama dari array gambar

            //     if ($file instanceof \Illuminate\Http\UploadedFile && $file->isValid()) {
            //         $filename = $file->hashName();

            //         // Menghapus gambar lama jika ada
            //         if (!empty($this->original['image']) && $this->original['image'] !== $this->image) {
            //             Storage::disk('public')->delete($this->original['image']);
            //         }

            //         // Menggunakan Intervention Image untuk mengubah ukuran gambar
            //         $image = Image::make($file->getRealPath());
            //         $image->resize(500, 500, function ($constraint) {
            //             $constraint->aspectRatio();
            //             $constraint->upsize();
            //         });

            //         // Simpan gambar ke dalam direktori storage/app/public/photos/testimony
            //         $path = $file->storeAs('photos/testimony', $filename, 'public');

            //         // Simpan path gambar ke database (misalnya dengan menggunakan model)
            //         $this->image = $path;
            //     }
            // }





            $currentTime = Carbon::now('Asia/Jakarta');

            if ($this->testimonyId) {
                // Mode edit, perbarui Testimoni yang ada
                $testimony = Testimony::findOrFail($this->testimonyId);

                // Perbarui data Testimoni
                $testimony->title = $this->title;

                if ($this->image) {
                    $file = $this->image; // Mengambil elemen pertama dari array gambar

                    if ($file instanceof \Illuminate\Http\UploadedFile && $file->isValid()) {
                        $filename = $file->hashName();

                        // Menghapus gambar lama jika ada
                        if (!empty($testimony->image)) {
                            Storage::disk('public')->delete($testimony->image);
                        }

                        // Menggunakan Intervention Image untuk mengubah ukuran gambar
                        $image = Image::make($file->getRealPath());
                        $image->resize(500, 500, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });

                        // Simpan gambar ke dalam direktori storage/app/public/photos/testimony
                        $path = $file->storeAs('photos/testimony', $filename, 'public');

                        // Simpan path gambar ke database
                        $testimony->image = $path;
                    }
                }

                $testimony->updated_at = $currentTime;

                // Simpan perubahan Testimoni
                $testimony->save();
            } else {
                // Mode create, buat Testimoni baru
                $testimony = new Testimony();

                // Set data Testimoni
                $testimony->title = $this->title;

                if ($this->image) {
                    $file = $this->image; // Mengambil elemen pertama dari array gambar

                    if ($file instanceof \Illuminate\Http\UploadedFile && $file->isValid()) {
                        $filename = $file->hashName();

                        // Menggunakan Intervention Image untuk mengubah ukuran gambar
                        $image = Image::make($file->getRealPath());
                        $image->resize(500, 500, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });

                        // Simpan gambar ke dalam direktori storage/app/public/photos/testimony
                        $path = $file->storeAs('photos/testimony', $filename, 'public');

                        // Simpan path gambar ke database
                        $testimony->image = $path;
                    }
                }

                $testimony->created_at = $currentTime;
                $testimony->updated_at = $currentTime;

                // Simpan Testimoni baru
                $testimony->save();
            }


            if ($testimony) {
                // Redirect ke halaman sukses
                $this->success = true;
                // $this->emit('closeModal');

                $message = $this->testimonyId ? 'Testimoni berhasil diubah.' : 'Testimoni berhasil ditambahkan.';
                $this->resetAll();
                return redirect()->route('dashboard.testimony.index')->with('success', $message);
            } else {
                // Redirect ke halaman error
                session()->flash('error', 'Gagal menambahkan Testimoni.');
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
        $this->testimonyId = null;
        $this->title = null;
        $this->image = null;
        $this->resetValidation();
        $this->resetErrorBag();
        $this->reset();
    }
}
