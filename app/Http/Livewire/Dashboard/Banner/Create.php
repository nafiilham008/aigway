<?php

namespace App\Http\Livewire\Dashboard\Banner;

use App\Models\Banner;
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

    protected $listeners = [
        'closeModal' => 'closeModal',
        'removePhoto' => 'removePhoto'
    ];

    public $bannerId;
    public $name, $start_date, $end_date, $image;
    public $success;
    public $error = [];
    public $deletedPhotos;

    public function mount($bannerId = null)
    {
        $this->bannerId = $bannerId;
        $this->success = false;

        if ($this->bannerId) {
            $this->loadBannerData();
        }
    }

    public function loadBannerData()
    {
        $banner = Banner::findOrFail($this->bannerId);
        $this->name = $banner->name;
        $this->start_date = $banner->start_date;
        $this->end_date = $banner->end_date;
        $this->image = $banner->image;
    }

    public function render()
    {
        $breadcrumb = $this->breadcrumb();

        return view('dashboard.banner.create', compact('breadcrumb'))
            ->layout('layouts.dashboard.app')
            ->layoutData([
                'title' => 'Tambah Banner',
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
                'label' => 'Banner',
                'link' => route('dashboard.banner.index'),
            ],
        ];

        if ($this->bannerId) {
            $breadcrumb[] = [
                'label' => 'Edit Banner',
            ];
        } else {
            $breadcrumb[] = [
                'label' => 'Tambah Banner',
            ];
        }

        return $breadcrumb;
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
    }


    public function closeModal()
    {
        session()->forget('success');
    }

    public function storeOrUpdateBanner()
    {
        try {
            $rules = [
                'name' => 'required|string',
                'start_date' => 'required|date',
                'end_date' => 'required|date|after:start_date',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            ];

            $messages = [
                'name.required' => 'Kolom Nama Banner harus diisi.',
                'image.required' => 'Kolom Foto harus diisi.',
                'image.image' => 'Kolom Foto harus berupa gambar.',
                'image.mimes' => 'Kolom Foto hanya mendukung format JPEG, PNG, JPG.',
                'image.max' => 'Ukuran Foto tidak boleh melebihi 5MB.',
                'start_date.required' => 'Kolom Tanggal Mulai harus diisi.',
                'start_date.date' => 'Kolom Tanggal Mulai harus berupa tanggal.',
                'end_date.required' => 'Kolom Tanggal Berakhir harus diisi.',
                'end_date.date' => 'Kolom Tanggal Berakhir harus berupa tanggal.',
                'end_date.after' => 'Kolom Tanggal Berakhir harus setelah Tanggal Mulai.',
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

            $currentTime = Carbon::now('Asia/Jakarta');

            if ($this->start_date <= now() && $this->end_date >= now()) {
                $status = true; // Mengatur status menjadi "on"
                $status_change_at = now(); // Menyimpan tanggal dan waktu perubahan status terakhir
            } elseif ($this->start_date > now()) {
                $status = false; // Mengatur status menjadi "off" (belum mulai)
                $status_change_at = null; // Mengosongkan tanggal dan waktu perubahan status terakhir
            } else {
                $status = false; // Mengatur status menjadi "off" (sudah berakhir)
                $status_change_at = null; // Mengosongkan tanggal dan waktu perubahan status terakhir
            }

            if ($this->bannerId) {
                // Mode edit, perbarui Banner yang ada
                $banner = Banner::findOrFail($this->bannerId);

                // Perbarui data Banner
                $banner->name = $this->name;
                $banner->start_date = $this->start_date;
                $banner->end_date = $this->end_date;

                if ($this->image) {
                    $file = $this->image; // Mengambil elemen pertama dari array gambar

                    if ($file instanceof \Illuminate\Http\UploadedFile && $file->isValid()) {
                        $filename = $file->hashName();

                        // Menghapus gambar lama jika ada
                        if (!empty($banner->image)) {
                            Storage::disk('public')->delete($banner->image);
                        }

                        // Menggunakan Intervention Image untuk mengubah ukuran gambar
                        $image = Image::make($file->getRealPath());
                        $image->resize(500, 500, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        });

                        // Simpan gambar ke dalam direktori storage/app/public/photos/banner
                        $path = $file->storeAs('photos/banner', $filename, 'public');

                        // Simpan path gambar ke database
                        $banner->image = $path;
                    }
                }




                $banner->updated_at = $currentTime;
                $banner->status = $status;
                $banner->status_change_at = $status_change_at;

                // Simpan perubahan Banner
                $banner->save();
            } else {
                // Mode create, buat Banner baru
                $banner = new Banner();

                // Set data Banner
                $banner->name = $this->name;
                $banner->start_date = $this->start_date;
                $banner->end_date = $this->end_date;

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

                        // Simpan gambar ke dalam direktori storage/app/public/photos/banner
                        $path = $file->storeAs('photos/banner', $filename, 'public');

                        // Simpan path gambar ke database
                        $banner->image = $path;
                    }
                }




                $banner->status = $status;
                $banner->status_change_at = $status_change_at;
                $banner->created_at = $currentTime;
                $banner->updated_at = $currentTime;

                // Simpan Banner baru
                $banner->save();
            }

            if ($banner) {
                // Redirect ke halaman sukses
                $this->success = true;
                // $this->emit('closeModal');

                $message = $this->bannerId ? 'Banner berhasil diubah.' : 'Banner berhasil ditambahkan.';
                $this->resetAll();
                return redirect()->route('dashboard.banner.index')->with('success', $message);
            } else {
                // Redirect ke halaman error
                session()->flash('error', 'Gagal menambahkan Banner.');
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
        $this->bannerId = null;
        $this->name = null;
        $this->start_date = null;
        $this->end_date = null;
        $this->image = null;
        $this->resetValidation();
        $this->resetErrorBag();
        $this->reset();
    }
}
