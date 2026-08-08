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
}
