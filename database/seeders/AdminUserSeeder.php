<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder {
    public function run(): void {
        $name = config('pyrosafe.admin.name');
        $email = config('pyrosafe.admin.email');
        $password = config('pyrosafe.admin.password');

        if(!$email || !$password) {
            $this->command?->warn('Admin user was not seeded because ADMIN_EMAIL or ADMIN_PASSWORD is missing.');
            return;
        }

        User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => $password
            ]
        );
    }
}
