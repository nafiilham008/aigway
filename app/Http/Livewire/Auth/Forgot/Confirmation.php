<?php

namespace App\Http\Livewire\Auth\Forgot;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Confirmation extends Component
{

    public $newPassword, $confirmPassword;
    public $error = [];
    public $token;

    public function mount ($token = null)
    {
        $this->token = $token;
        // dd($this->token);
    }

    public function render()
    {
        return view('auth.forgot.confirmation')->layout('layouts.auth.app')->layoutData([
            'title' => 'Reset Kata Sandi'
        ]);
    }

    public function updatePassword ()
    {
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
        } else {
            $currentTime = Carbon::now('Asia/Jakarta');
            
            $user = User::findOrFail(1);
            
            
            $user->password = bcrypt($this->newPassword);
            $user->updated_at = $currentTime;
            $user->password_reset_token = null; 
            $user->save();
            
            if ($user) {
                // Redirect ke halaman sukses
                return redirect()->route('login')->with('success', 'Kata sandi berhasil diubah');
                
            } else {
                // Redirect ke halaman error
                session()->flash('error', 'Gagal mengubah kata sandi.');
            }
        }


    }
}
