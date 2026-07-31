<?php

namespace Database\Seeders;

use App\Models\Establishment;
use App\Models\Publication;
use App\Models\Report;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DemoContentSeeder extends Seeder {
    public function run(): void {
        $admin = User::query()->where('email', config('pyrosafe.admin.email'))->first();
        $categories = Category::all();

        if (! $admin || $categories->isEmpty()) {
            $this->command?->warn('Demo content was not seeded because admin user or categories are missing.');

            return;
        }

        Establishment::factory()
            ->count(8)
            ->create();

        Report::factory()
            ->count(15)
            ->withImages(2)
            ->create();

        Publication::factory()
            ->count(8)
            ->withImages(3)
            ->state(fn () => [
                'user_id' => $admin->id,
                'category_id' => $categories->random()->id,
            ])
            ->create();
    }
}
