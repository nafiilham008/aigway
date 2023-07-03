<?php

namespace App\Http\Livewire\Dashboard\Setting;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\Livewire;

class Index extends Component
{

    protected $listeners = [
        'updatePassword' => 'updatePassword',
    ];

    public $selectedUser;
    public $name, $email, $city, $address, $phone, $longitude, $latitude, $password;
    public $success;
    public $error = [];
    public $openModal = false;


    public function mount()
    {
        $this->getUser();
    }

    public function render()
    {
        $breadcrumb = $this->breadcrumb();

        return view('dashboard.setting.index', compact('breadcrumb'))
            ->layout('layouts.dashboard.app')
            ->layoutData([
                'title' => 'Pengaturan Admin',
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
                'label' => 'Pengaturan'
            ]
        ];
    }

    public function storeOrUpdateSetting()
    {
        try {
            $rules = [
                'name' => 'required|string',
                'email' => 'required|email|unique:users,email' . ($this->selectedUser->id ? ',' . $this->selectedUser->id : ''),
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
                'email.unique' => 'Email telah digunakan oleh user lain.',
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
            } else {

                $currentTime = Carbon::now('Asia/Jakarta');

                if ($this->selectedUser) {
                    // Mode edit, perbarui user yang ada
                    $user = User::findOrFail($this->selectedUser->id);


                    // Perbarui data user
                    $user->name = $this->name;
                    $user->email = $this->email;
                    $user->city = $this->city;
                    $user->address = $this->address;
                    $user->phone = $this->phone;
                    $user->longitude = $this->longitude;
                    $user->latitude = $this->latitude;
                    $user->updated_at = $currentTime;


                    // Simpan perubahan user
                    $user->save();
                }


            }
            if ($user) {
                // Redirect ke halaman sukses
                $this->success = true;
                // $this->emit('closeModal');

                // dd($this->selectedUser);
                $message = $this->selectedUser ? 'User berhasil diubah.' : 'User berhasil ditambahkan.';
                $this->resetAll();
                return redirect()->route('dashboard.setting.index')->with('success', $message);
            } else {
                // Redirect ke halaman error
                session()->flash('error', 'Gagal menambahkan user.');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            // dd($th->getMessage());
            return $th->getMessage();
        }
    }

    public function getUser()
    {
        $this->selectedUser = User::findOrFail(1);

        $this->name = $this->selectedUser->name;
        $this->email = $this->selectedUser->email;
        $this->city = $this->selectedUser->city;
        $this->address = $this->selectedUser->address;
        $this->phone = $this->selectedUser->phone;
        $this->longitude = $this->selectedUser->longitude;
        $this->latitude = $this->selectedUser->latitude;
        $this->password = $this->selectedUser->password;
    }

    public function getPassword()
    {
        $this->openModal = true;

        $this->emit('showModalPassword', $this->openModal, $this->password, $this->selectedUser->id);
    }

    public function updatePassword($newPassword)
    {
        try {

            $currentTime = Carbon::now('Asia/Jakarta');

            $user = User::findOrFail($this->selectedUser->id);

            $user->password = bcrypt($newPassword);
            $user->updated_at = $currentTime;
            $user->save();

            if ($user) {
                // Redirect ke halaman sukses
                // $this->success = true;
                $this->emit('modalClose');
                $this->emit('resetAll');
                // return redirect()->route('dashboard.setting.index')->with('success', 'Kata sandi berhasil diubah');
                session()->flash('success', 'Kata sandi berhasil diubah');
                $this->resetAll();
                $this->getUser();
            } else {
                // Redirect ke halaman error
                session()->flash('error', 'Gagal mengubah kata sandi.');
                $this->resetAll();
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function resetAll()
    {
        parent::reset();

        $this->selectedUser = null;
        $this->success = false;
        $this->error = [];
        $this->openModal = false;

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
