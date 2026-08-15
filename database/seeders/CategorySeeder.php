<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder {
    public function run(): void {
        $categories = [
            [
                'name' => 'Prevención',
                'slug' => 'prevencion',
                'description' => 'Contenido preventivo sobre seguridad pirotecnica.'
            ],
            [
                'name' => 'Noticias',
                'slug' => 'noticias',
                'description' => 'Actualizaciones y comunicados relevantes.',
            ],
            [
                'name' => 'Capacitacion',
                'slug' => 'capacitacion',
                'description' => 'Material educativo y formativo.',
            ],
            [
                'name' => 'Normatividad',
                'slug' => 'normatividad',
                'description' => 'Informacion sobre reglas, permisos y buenas practicas.',
            ]
        ];

        foreach($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
