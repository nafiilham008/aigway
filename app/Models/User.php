<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, HasPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasPermission($permission)
    {
        // Mendapatkan peran pengguna
        $roles = $this->roles;

        // Memeriksa izin pengguna berdasarkan peran
        foreach ($roles as $role) {
            // Mendapatkan izin yang terkait dengan peran
            $permissions = $role->permissions;

            // Memeriksa apakah izin yang diberikan terdapat dalam daftar izin pengguna
            if ($permissions->contains('name', $permission)) {
                return true;
            }
        }

        return false;
    }

    public function generatePasswordResetToken()
    {
        $token = Str::random(60); // Generate a random token
        $this->password_reset_token = $token;
        $this->save();

        return $token;
    }
}
