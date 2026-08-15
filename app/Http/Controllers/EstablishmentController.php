<?php

namespace App\Http\Controllers;

use App\Models\Establishment;

class EstablishmentController extends Controller
{
    public function index()
    {
        $establishments = Establishment::where('is_visible', true)
            ->get();

        $mapEstablishments = $establishments->map(function ($establishment) {
            return [
                'id' => $establishment->id,
                'name' => $establishment->name,
                'address' => $establishment->address,
                'latitude' => $establishment->latitude,
                'longitude' => $establishment->longitude,
                'description' => $establishment->description,
                'business_hours' => $establishment->business_hours,
                'phone' => $establishment->phone,
            ];
        })->toArray();

        return view('public.establishment', [
            'establishments' => $establishments,
            'mapEstablishments' => $mapEstablishments,
        ]);
    }
}
