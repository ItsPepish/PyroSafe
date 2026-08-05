<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'public.home', [
    'features' => [
        [
            'title' => 'Información Preventiva',
            'description' => 'Articulos, recomendaciones y buenas prácticas para el uso responsable de la pirotecnia.',
            'bg-color' => 'sky-200',
            'txt-color' => 'sky-600', 
            'link_text' => 'Explorar',
            'href' => '/info',
            'icon' => 'book'
        ],
        [
            'title' => 'Mapa de Establecimientos',
            'description' => 'Ubica en un mapa interactivo los establecimientos autorizados y sus datos.',
            'bg-color' => 'sky-200',
            'txt-color' => 'sky-600', 
            'link_text' => 'Explorar',
            'href' => '/mapa',
            'icon' => 'map'
        ],
        [
            'title' => 'Reporte Ciudadano',
            'description' => 'Informa de forma rápida y sencilla sobre situaciones de riesgos relacionados a la pirotecnia.',
            'bg-color' => 'red-200',
            'txt-color' => 'red-600', 
            'link_text' => 'Explorar',
            'href' => '/reporte',
            'icon' => 'alert'
        ],
    ]
]);