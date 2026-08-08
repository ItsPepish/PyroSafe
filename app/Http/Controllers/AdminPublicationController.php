<?php

namespace App\Http\Controllers;

use App\Actions\CreatePublicationAction;
use App\Enums\PublicationStatus;
use App\Http\Requests\StorePublicationRequest;
use App\Models\Category;
use App\Models\Publication;

class AdminPublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::with(['category', 'user', 'coverImage'])
            ->latest()
            ->paginate(4);

        return view('admin.publications.index', [
            'publications' => $publications,
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        $statuses = PublicationStatus::cases();

        return view('admin.publications.create', [
            'categories' => $categories,
            'statuses' => $statuses,
        ]);
    }

    public function store(StorePublicationRequest $request, CreatePublicationAction $createPublication)
    {
        $createPublication->execute($request->validated());

        return redirect()
            ->route('admin.publications.index')
            ->with('success', 'Publicación creada correctamente');
    }
}
