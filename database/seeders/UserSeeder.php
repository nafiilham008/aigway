<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat user admin
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'address' => "Jln Belimbing No. 86, Bantul, Bantul, Daerah Istimewa Yogyakarta",
            'phone' => "+62822-2133-3561",
            'city' => "D.I. Yogyakarta",
            'longitude' => 110.4039266944619,
            'latitude' => -7.8314032729806184
        ]);

        // Memberikan role admin pada user admin
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $user->assignRole($adminRole);

        // Mendapatkan semua izin
        $permissions = Permission::pluck('id')->all();

        // Menambahkan semua izin ke role admin
        $adminRole->syncPermissions($permissions);
    }
}
