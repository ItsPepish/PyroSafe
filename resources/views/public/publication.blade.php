@extends('layouts.public')

@section('content')

    <section class="bg-[#10222b] text-[#dee6e9]">
        <div class="mx-auto max-w-6xl px-4 py-14 sm:px-6 flex flex-col gap-5">
            <a href="{{ route('publications.index') }}" class="text-sm text-[#dee6e9]/70 transition-colors hover:text-[#dee6e9] self-start">&larr; Volver a la biblioteca</a>
            <div class="flex items-center gap-3 text-sm">
                <p class="inline-flex rounded-full bg-[#f4993c]/20 px-3 py-1 text-xs font-medium text-[#f4993c]">{{ $publication->category->name }}</p>
                <p class="text-[#dee6e9]/70">{{ $publication->published_at->format('d/m/Y') }}</p>
            </div>
            <h1 class="text-3xl font-semibold sm:text-4xl">{{ $publication->title }}</h1>
            <p class="max-w-2xl text-[#dee6e9]/80">{{ $publication->summary }}</p>
        </div>
    </section>
    <section>
        <div class="mx-auto max-w-6xl px-4 py-8 sm:py-16 sm:px-6 flex flex-col gap-5">
            <img src="{{ Storage::url($publication->coverImage->path) }}" alt="{{ $publication->coverImage->alt_text }}" class="rounded-4xl">
            <p>{{ $publication->content }}</p>
        </div>
    </section>

@endsection