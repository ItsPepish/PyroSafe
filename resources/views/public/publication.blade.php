@extends ('layouts.public')

@section ('content')
    <section class="bg-[#10222b] text-[#dee6e9]">
        <div class="mx-auto flex max-w-6xl flex-col gap-5 px-4 py-14 sm:px-6">
            <a href="{{ route('publications.index') }}" class="self-start text-sm text-[#dee6e9]/70 transition-colors hover:text-[#dee6e9]"
                >&larr; Volver a la biblioteca</a
            >
            <div class="flex items-center gap-3 text-sm">
                <p class="inline-flex rounded-full bg-[#f4993c]/20 px-3 py-1 text-xs font-medium text-[#f4993c]">{{ $publication->category->name }}</p>
                <p class="text-[#dee6e9]/70">{{ $publication->published_at->format('d/m/Y') }}</p>
            </div>
            <h1 class="text-3xl leading-tight font-semibold text-balance sm:text-4xl">{{ $publication->title }}</h1>
            <p class="max-w-2xl leading-relaxed text-pretty text-[#dee6e9]/80">{{ $publication->summary }}</p>
        </div>
    </section>
    <section>
        <div class="mx-auto flex max-w-6xl flex-col gap-5 px-4 py-8 sm:px-6 sm:py-16">
            <img
                src="{{ Storage::url($publication->coverImage->path) }}"
                alt="{{ $publication->coverImage->alt_text }}"
                class="aspect-video w-full rounded-2xl border border-[#d6e0e4] object-cover" />
            <p class="leading-relaxed text-pretty whitespace-pre-line text-[#10222b]">{{ $publication->content }}</p>
        </div>
    </section>

    <section class="border-t border-[#d6e0e4] bg-[#ecf3f5]">
        <div class="mx-auto flex max-w-6xl flex-col gap-10 px-4 py-8 sm:px-6 sm:py-16">
            <p class="text-2xl font-semibold text-[#10222b]">Sigue leyendo</p>
            <div class="grid gap-5 md:grid-cols-3">
                @foreach ($relatedPublications as $relatedPublication)
                    <div
                        class="group relative flex h-full flex-col overflow-hidden rounded-2xl border border-[#d6e0e4] bg-white shadow-sm transition-all hover:-translate-y-1 hover:shadow-md">
                        <div class="relative aspect-4/3 overflow-hidden">
                            <img
                                src="{{ Storage::url($relatedPublication->coverImage->path) }}"
                                alt=""
                                class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-105" />
                        </div>
                        <div class="flex flex-1 flex-col gap-4 p-4">
                            <div class="flex items-center justify-between gap-2">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-[#ecf3f5] px-2.5 py-0.5 text-xs font-medium text-[#5e6b73] transition-colors"
                                    >{{ $relatedPublication->category->name }}</span
                                >
                                <span class="inline-flex items-center gap-1 text-xs text-[#5e6b73]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock size-3.5" aria-hidden="true">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 6v6l4 2"></path>
                                    </svg>
                                    {{ $relatedPublication->published_at->format('d/m/Y') }}
                                </span>
                            </div>
                            <h3 class="line-clamp-2 text-lg leading-snug font-semibold text-balance text-[#10222b]">
                                {{ $relatedPublication->title }}
                            </h3>
                            <p class="line-clamp-3 flex-1 text-sm leading-relaxed text-[#5e6b73]">{{ $relatedPublication->summary }}</p>
                            <a
                                href="{{ route('publications.show', $relatedPublication) }}"
                                class="inline-flex items-center gap-1.5 text-sm font-semibold text-[#0f7688]">
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
