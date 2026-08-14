<?php

namespace App\Http\Controllers;

use App\Enums\PublicationStatus;
use App\Models\Publication;

class HomeController extends Controller
{
    public function index()
    {
        $features = [
            [
                'title' => 'Información Preventiva',
                'description' => 'Articulos, recomendaciones y buenas prácticas para el uso responsable de la pirotecnia.',
                'color' => 'sky',
                'link_text' => 'Explorar',
                'href' => '/info',
                'icon' => 'book',
            ],
            [
                'title' => 'Mapa de Establecimientos',
                'description' => 'Ubica en un mapa interactivo los establecimientos autorizados y sus datos.',
                'color' => 'sky',
                'link_text' => 'Explorar',
                'href' => '/establecimientos',
                'icon' => 'map',
            ],
            [
                'title' => 'Reporte Ciudadano',
                'description' => 'Informa de forma rápida y sencilla sobre situaciones de riesgos relacionados a la pirotecnia.',
                'color' => 'red',
                'link_text' => 'Explorar',
                'href' => '/reporte',
                'icon' => 'alert',
            ],
        ];

        $reportSteps = [
            [
                'step' => 'Paso 1',
                'icon' => 'map2',
                'title' => 'Indica la ubicación',
                'description' => 'Señala la zona aproximada del riesgo en el mapa o describe la dirección.',
            ],
            [
                'step' => 'Paso 2',
                'icon' => 'doc',
                'title' => 'Describe la situación',
                'description' => 'Cuenta lo que observaste. Puedes adjuntar fotografías si lo deseas.',
            ],
            [
                'step' => 'Paso 3',
                'icon' => 'paper-flight',
                'title' => 'Enviar tu reporte',
                'description' => 'Se dará seguimiento a tu reporte enviado.',
            ],
        ];

        $publications = Publication::where('status', PublicationStatus::Published->value)
            ->where('published_at', '<=', now())
            ->with(['category', 'coverImage'])
            ->latest('published_at')
            ->limit(3)
            ->get();

        return view('public.home', [
            'features' => $features,
            'reportSteps' => $reportSteps,
            'publications' => $publications
        ]);
    }
}
