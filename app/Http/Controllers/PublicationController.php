<?php

namespace App\Http\Controllers;

use App\Enums\PublicationStatus;
use App\Models\Publication;

class PublicationController extends Controller
{
    public function index() {
        $publications = Publication::where('status', PublicationStatus::Published->value)
            ->where('published_at', '<=', now())
            ->with(['category', 'coverImage'])
            ->latest('published_at')
            ->paginate(9);
            
        return view('public.info', [
            'publications' => $publications
        ]);
    }

    public function show(Publication $publication) {
        abort_if(($publication->status !== PublicationStatus::Published) || ($publication->published_at->isFuture()), 404);

        $publication->load('category', 'coverImage');

        $relatedPublications = Publication::where('status', PublicationStatus::Published->value)
            ->where('published_at', '<=', now())
            ->whereKeyNot($publication->id)
            ->with(['category', 'coverImage'])
            ->latest('published_at')
            ->limit(3)
            ->get();
        
        return view('public.publication', [
            'publication' => $publication,
            'relatedPublications' => $relatedPublications
        ]);
    }
}
