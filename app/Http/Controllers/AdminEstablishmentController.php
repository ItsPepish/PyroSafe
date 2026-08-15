<?php

namespace App\Http\Controllers;

use App\Actions\CreateEstablishmentAction;
use App\Http\Requests\StoreEstablishmentRequest;
use App\Models\Establishment;

class AdminEstablishmentController extends Controller
{
    public function index() {
        $establishments = Establishment::latest()
            ->paginate(10);

        return view('admin.establishments.index', [
            'establishments' => $establishments
        ]);
    }

    public function create() {
        return view('admin.establishments.create');
    }

    public function store(StoreEstablishmentRequest $request, CreateEstablishmentAction $createEstablishment) {
        $createEstablishment->execute($request->validated());

        return redirect()
            ->route('admin.establishments.index')
            ->with('success', 'Establecimiento creado correctamente');
    }
}
