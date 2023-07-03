<?php

namespace App\Http\Livewire\Dashboard\Reseller;

use App\Models\Reseller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{

    public $selectedReseller;
    public $name, $email, $city, $address, $phone, $longitude, $latitude;
    public $success;
    public $resellerCount;
    public $error = [];

    protected $listeners = [
        'editReseller' => 'getReseller',
    ];

    public function mount()
    {
        $this->resellerCount = Reseller::all()->count();
    }

    public function render()
    {
        $breadcrumb = $this->breadcrumb();

        return view('dashboard.reseller.index', compact('breadcrumb'))
            ->layout('layouts.dashboard.app')
            ->layoutData([
                'title' => 'Daftar Reseller',
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
                'label' => 'Reseller'
            ]
        ];
    }

    public function storeOrUpdateReseller()
    {
        try {
            $rules = [
                'name' => 'required|string',
                'email' => 'required|email|unique:resellers,email' . ($this->selectedReseller ? ',' . $this->selectedReseller->id : ''),
                'city' => 'required|string',
                'address' => 'required|string',
                'phone' => 'required|string',
                'longitude' => 'required|numeric',
                'latitude' => 'required|numeric',
            ];

            $messages = [
                'name.required' => 'Kolom Nama harus diisi.',
                'email.required' => 'Kolom Email harus diisi.',
                'email.email' => 'Format Email tidak valid.',
                'email.unique' => 'Email telah digunakan oleh reseller lain.',
                'city.required' => 'Kolom Kota harus diisi.',
                'address.required' => 'Kolom Alamat harus diisi.',
                'phone.required' => 'Kolom No. Telepon harus diisi.',
                'longitude.required' => 'Kolom Longitude harus diisi.',
                'longitude.numeric' => 'Kolom Longitude harus berupa angka.',
                'latitude.required' => 'Kolom Latitude harus diisi.',
                'latitude.numeric' => 'Kolom Latitude harus berupa angka.',
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

            if ($this->selectedReseller) {
                // Mode edit, perbarui Reseller yang ada
                $reseller = Reseller::findOrFail($this->selectedReseller->id);

                // Perbarui data Reseller
                $reseller->name = $this->name;
                $reseller->email = $this->email;
                $reseller->city = $this->city;
                $reseller->address = $this->address;
                $reseller->phone = $this->phone;
                $reseller->longitude = $this->longitude;
                $reseller->latitude = $this->latitude;
                $reseller->updated_at = $currentTime;

                // Simpan perubahan Reseller
                $reseller->save();
            } else {
                // Mode create, buat Reseller baru
                $reseller = new Reseller();

                // Set data Reseller
                $reseller->name = $this->name;
                $reseller->email = $this->email;
                $reseller->city = $this->city;
                $reseller->address = $this->address;
                $reseller->phone = $this->phone;
                $reseller->longitude = $this->longitude;
                $reseller->latitude = $this->latitude;
                $reseller->created_at = $currentTime;
                $reseller->updated_at = $currentTime;

                // Simpan Reseller baru
                $reseller->save();
            }


            if ($reseller) {
                // Redirect ke halaman sukses
                $this->success = true;
                // $this->emit('closeModal');

                // dd($this->selectedReseller);
                $message = $this->selectedReseller ? 'Reseller berhasil diubah.' : 'Reseller berhasil ditambahkan.';
                $this->resetAll();
                return redirect()->route('dashboard.reseller.index')->with('success', $message);
            } else {
                // Redirect ke halaman error
                session()->flash('error', 'Gagal menambahkan Reseller.');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return $th->getMessage();
        }
    }

    public function getReseller ($idReseller = null)
    {
        $this->selectedReseller = Reseller::findOrFail($idReseller);

        $this->name = $this->selectedReseller->name;
        $this->email = $this->selectedReseller->email;
        $this->city = $this->selectedReseller->city;
        $this->address = $this->selectedReseller->address;
        $this->phone = $this->selectedReseller->phone;
        $this->longitude = $this->selectedReseller->longitude;
        $this->latitude = $this->selectedReseller->latitude;
    }

    public function resetAll()
    {
        parent::reset();

        $this->name = null;
        $this->email = null;
        $this->city = null;
        $this->address = null;
        $this->phone = null;
        $this->longitude = null;
        $this->latitude = null;
        $this->resetValidation();
        $this->resetErrorBag();
        $this->reset();

    }
}
