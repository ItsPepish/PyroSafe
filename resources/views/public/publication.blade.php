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

    <section class="bg-[#ecf3f5] border-t border-gray-300">
        <div class="mx-auto max-w-6xl px-4 py-8 sm:py-16 sm:px-6 flex flex-col gap-10">
            <p class="text-2xl font-semibold text-[#10222b]">Sigue leyendo</p>
            <div class="grid gap-5 md:grid-cols-3">
            @foreach($relatedPublications as $relatedPublication)
                <div class="group flex flex-col h-full rounded-2xl border border-[#d6e0e4] shadow-sm relative transition-all hover:-translate-y-1 hover:shadow-md bg-white">
                    <div class="relative aspect-4/3 overflow-hidden rounded-t-lg">
                        <img src="{{ Storage::url($relatedPublication->coverImage->path) }}" alt="" class="h-full w-full object-cover">
                    </div>
                    <div class="flex flex-1 flex-col p-4 gap-4">
                        <div class="flex items-center justify-between gap-2">
                            <span class="inline-flex items-center gap-1 rounded-full bg-[#ecf3f5] px-2.5 py-0.5 text-xs font-medium text-[#5e6b73] transition-colors">{{ $relatedPublication->category->name }}</span>
                            <span class="inline-flex items-center gap-1 text-xs text-[#5e6b73]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock size-3.5" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 6v6l4 2"></path>
                                </svg>
                                {{ $relatedPublication->published_at->format('d/m/Y') }}
                            </span>
                        </div>
                        <h3 class="text-lg font-semibold text-[#10222b]">{{ $publication->title }}</h3>
                        <p class="flex-1 text-sm text-[#5e6b73]">{{ $relatedPublication->summary }}</p>
                        <a href="{{ route('publications.show', $relatedPublication) }}" class="text-[#0f7688] text-sm font-semibold inline-flex items-center gap-1.5">
                            Leer articulo
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5" aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                            <span class="absolute inset-0" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection