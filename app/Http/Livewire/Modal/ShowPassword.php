<?php

namespace App\Http\Livewire\Modal;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ShowPassword extends Component
{
    public $openModal = false;
    public $_id, $password;
    public $oldPassword;
    public $newPassword;
    public $confirmPassword;
    public $error = [];

    protected $listeners = [
        'showModalPassword' => 'getPassword',
    ];


    public function render()
    {
        return view('modal.show-password');
    }

    public function getPassword($openModal = null, $password = null, $id = null)
    {
        $this->openModal = $openModal;
        $this->password = $password;
        $this->_id = $id;
    }

    public function modalClose()
    {
        $this->openModal = false;
    }

    public function updatePassword()
    {
        try {
            if (Hash::check($this->oldPassword, $this->password)) {
                $rules = [
                    'newPassword' => 'required|string',
                    'confirmPassword' => 'required|string|same:newPassword',
                ];

                $messages = [
                    'newPassword.required' => 'Kolom Password Baru harus diisi.',
                    'confirmPassword.required' => 'Kolom Konfirmasi Password harus diisi.',
                    'confirmPassword.same' => 'Konfirmasi Password harus sama dengan Password Baru.',
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

                $user = User::findOrFail($this->_id);

                $user->password = bcrypt($this->newPassword);
                $user->updated_at = $currentTime;
                $user->save();

                if ($user) {
                    // Redirect ke halaman sukses
                    // $this->success = true;
                    $this->modalClose();
                    $this->resetAll();
                    // return redirect()->route('dashboard.setting.index')->with('success', 'Kata sandi berhasil diubah');
                    session()->flash('success', 'Kata sandi berhasil diubah');
                    $this->resetAll();
                } else {
                    // Redirect ke halaman error
                    session()->flash('error', 'Gagal mengubah kata sandi.');
                    $this->resetAll();
                }
            } else {
                session()->flash('error', 'Kata sandi lama tidak sesuai');
                $this->oldPassword = null;
                $this->newPassword = null;
                $this->confirmPassword = null;
            }
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function resetAll()
    {
        $this->openModal = false;
        $this->_id = null;
        $this->password = null;
        $this->oldPassword = null;
        $this->newPassword = null;
        $this->confirmPassword = null;
        $this->error = [];
        
        $this->resetValidation();
        $this->resetErrorBag();
        $this->reset();
    }
}
