<?php

namespace App\Http\Controllers;

use App\Actions\CreatePublicationAction;
use App\Enums\PublicationStatus;
use App\Http\Requests\StorePublicationRequest;
use App\Http\Requests\UpdatePublicationRequest;
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

    public function edit(Publication $publication) {
        $publication->load(['category', 'coverImage']);

        $categories = Category::all();
        $statuses = PublicationStatus::cases();

        return view('admin.publications.edit', [
            'publication' => $publication,
            'categories' => $categories,
            'statuses' => $statuses,
        ]);
    }

    public function update(UpdatePublicationRequest $request, Publication $publication) {
        $validated = $request->validated();

        $publishedAt = ($validated['status'] === PublicationStatus::Published->value) ? (($publication->published_at) ? $publication->published_at : now()) : null;

        $publication->update([
            'category_id' => $validated['category_id'],
            'title' => $validated['title'],
            'summary' => $validated['summary'],
            'content' => $validated['content'],
            'status' => $validated['status'],
            'published_at' => $publishedAt
        ]);

        return redirect()
            ->route('admin.publications.index')
            ->with('success', 'Publicación editada correctamente');
    }
}
