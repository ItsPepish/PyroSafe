@extends ('layouts.public')

@section ('content')
    <section class="bg-[#10222b] text-[#dee6e9]">
        <div class="mx-auto flex max-w-6xl flex-col gap-4 px-4 py-16 sm:px-6">
            <h1 class="text-3xl font-semibold sm:text-4xl">
                Información preventiva
            </h1>
            <p class="max-w-2xl leading-relaxed text-pretty text-[#dee6e9]/80">Artículos claros y breves sobre seguridad, buenas prácticas y prevención de accidentes con pirotecnia.</p>
        </div>
    </section>

    <section class="border-b border-gray-300">
        <div class="mx-auto flex max-w-6xl flex-col gap-10 px-4 py-16 sm:px-6">
            <div class="grid gap-5 md:grid-cols-3">
                @forelse ($publications as $publication)
                    <div
                        class="relative flex h-full flex-col rounded-2xl border border-gray-300/50 shadow-sm transition-all hover:-translate-y-1 hover:shadow-md"
                    >
                        <div
                            class="relative aspect-4/3 overflow-hidden rounded-t-lg"
                        >
                            <img
                                src="{{ Storage::url($publication->coverImage->path) }}"
                                alt="{{ $publication->coverImage->alt_text }}"
                                class="h-full w-full object-cover"
                            />
                        </div>
                        <div class="flex flex-1 flex-col gap-4 p-4">
                            <div
                                class="flex items-center justify-between gap-2"
                            >
                                <span
                                    class="inline-flex items-center gap-1 rounded-full border border-gray-600/40 px-2.5 py-0.5 text-xs font-medium transition-colors"
                                    >{{ $publication->category->name }}</span
                                >
                                <span
                                    class="inline-flex items-center gap-1 text-xs"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock size-3.5" aria-hidden="true">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="M12 6v6l4 2"></path>
                                    </svg>
                                    {{ $publication->published_at->format('d/m/Y') }}
                                </span>
                            </div>
                            <h3 class="text-lg font-semibold text-balance">
                                {{ $publication->title }}
                            </h3>
                            <p class="font-display flex-1 text-sm">{{ $publication->summary }}</p>
                            <a
                                href="{{ route('publications.show', $publication) }}"
                                class="inline-flex items-center gap-1.5 font-semibold text-sky-600"
                            >
                                Leer articulo
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right size-4 transition-transform hover:translate-x-0.5 hover:-translate-y-0.5" aria-hidden="true">
                                    <path d="M7 7h10v10"></path>
                                    <path d="M7 17 17 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="md:col-span-3">No hay publicaciones</div>
                @endforelse
            </div>
            {{ $publications->links() }}
        </div>
    </section>
@endsection
