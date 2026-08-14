@extends ('layouts.public')

@section ('content')
    <section class="bg-[#10222b] text-[#dee6e9]">
        <div class="mx-auto flex max-w-6xl flex-col gap-5 px-4 py-14 sm:px-6">
            <h1 class="text-3xl leading-tight font-semibold text-balance sm:text-4xl">Reportar una situación de riesgo</h1>
            <p class="max-w-2xl leading-relaxed text-pretty text-[#dee6e9]/80">Tu reporte es anónimo y confidencial. La información se canaliza a las autoridades competentes para su atención.</p>
        </div>
    </section>

    <section>
        <div class="mx-auto flex max-w-6xl flex-col gap-4 px-4 py-14 sm:px-6">
            @if (session('success'))
                <div>
                    <p class="rounded-xl border border-[#0f7688]/30 bg-[#0f7688]/8 px-4 py-3 text-center text-sm font-medium text-[#0f7688]">{{ session('success') }}</p>
                </div>
            @endif
            <form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-5">
                @csrf

                <div class="flex flex-col gap-4 rounded-2xl border border-[#d6e0e4] bg-white p-6 shadow-sm">
                    <h2 class="text-lg font-semibold text-[#10222b]">1. Tipo de situación</h2>
                    <p class="text-sm text-[#5e6b73]">Selecciona la opción que mejor describa lo que observaste.</p>
                    <div class="grid grid-cols-2 gap-3 text-start">
                        @foreach ($reportTypes as $reportType)
                            <label>
                                <input
                                    type="radio"
                                    name="type"
                                    value="{{ $reportType->value }}"
                                    @checked (old('type') == $reportType->value)
                                    class="peer sr-only" />
                                <div
                                    class="h-full cursor-pointer content-center rounded-xl border border-[#d6e0e4] px-2 py-2 text-center text-xs font-medium text-[#10222b] transition-colors peer-checked:border-[#0f7688] peer-checked:bg-[#ecf3f5] peer-checked:text-[#0f7688] hover:border-[#0f7688]/50 md:px-4 md:text-start md:text-base">
                                    {{ $reportType->label() }}
                                </div>
                            </label>
                        @endforeach
                    </div>
                    @error ('type')
                        <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-4 rounded-2xl border border-[#d6e0e4] bg-white p-6 shadow-sm">
                    <h2 class="text-lg font-semibold text-[#10222b]">2. Nivel de urgencia</h2>
                    <p class="text-sm text-[#5e6b73]">Selecciona el nivel de urgencia para la situación.</p>
                    <div class="grid grid-cols-3 gap-3 text-start">
                        @foreach ($reportUrgencies as $reportUrgency)
                            <label>
                                <input
                                    type="radio"
                                    name="urgency"
                                    value="{{ $reportUrgency->value }}"
                                    @checked (old('urgency') == $reportUrgency->value)
                                    class="peer sr-only" />
                                <div
                                    class="cursor-pointer rounded-xl border border-[#d6e0e4] px-2 py-2 text-center text-xs font-medium text-[#10222b] transition-colors hover:border-[#0f7688]/50 md:px-4 md:text-start md:text-base {{ $reportUrgency->checkedClasses() }}">
                                    {{ $reportUrgency->label() }}
                                </div>
                            </label>
                        @endforeach
                    </div>
                    @error ('urgency')
                        <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col gap-4 rounded-2xl border border-[#d6e0e4] bg-white p-6 shadow-sm">
                    <h2 class="text-lg font-semibold text-[#10222b]">3. Ubicación</h2>
                    <p class="text-sm text-[#5e6b73]">Indica dónde ocurre la situación.</p>
                    <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
                        <div class="flex flex-col gap-2">
                            <label for="street_address" class="text-sm font-medium text-[#10222b]">Dirección</label>
                            <div class="relative">
                                <input
                                    type="text"
                                    name="street_address"
                                    id="street_address"
                                    placeholder="Ej. Centro Tultepec"
                                    value="{{ old('street_address') }}"
                                    class="h-11 w-full rounded-xl border border-[#d6e0e4] bg-white px-3.5 pr-12 text-sm text-[#10222b] shadow-sm transition-colors placeholder:text-[#5e6b73] focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none" />
                                <button
                                    data-search-address
                                    type="button"
                                    class="absolute top-1/2 right-2 grid size-8 -translate-y-1/2 place-items-center rounded-full text-[#5e6b73] transition-colors hover:bg-[#ecf3f5] hover:text-[#0f7688]">
                                    ⌕
                                </button>
                            </div>
                            @error ('street_address')
                                <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="address_reference" class="text-sm font-medium text-[#10222b]">Referencia (opcional)</label>
                            <input
                                type="text"
                                name="address_reference"
                                id="address_reference"
                                placeholder="Ej. Hay una tienda verde, enfrente de un terreno verdoso."
                                value="{{ old('address_reference') }}"
                                class="h-11 w-full rounded-xl border border-[#d6e0e4] bg-white px-3.5 text-sm text-[#10222b] shadow-sm transition-colors placeholder:text-[#5e6b73] focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none" />
                            @error ('address_reference')
                                <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div data-report-map class="z-0 h-120 rounded-2xl border border-[#d6e0e4]" id="map"></div>
                    @error ('latitude')
                        <p class="text-sm text-[#df1b27]">Selecciona un punto en el mapa.</p>
                    @enderror
                    <button
                        data-use-current-location
                        type="button"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-[#d6e0e4] bg-white px-4 py-2.5 text-sm font-medium text-[#10222b] transition-colors hover:bg-[#ecf3f5]">
                        Usar mi ubicación actual
                    </button>
                    <input type="text" name="latitude" value="{{ old('latitude') }}" readonly hidden />
                    <input type="text" name="longitude" value="{{ old('longitude') }}" readonly hidden />
                </div>

                <div class="flex flex-col gap-4 rounded-2xl border border-[#d6e0e4] bg-white p-6 shadow-sm">
                    <h2 class="text-lg font-semibold text-[#10222b]">4. Descripción</h2>
                    <p class="text-sm text-[#5e6b73]">Cuéntanos con tus palabras qué está pasando.</p>
                    <label for="description" class="text-sm font-medium text-[#10222b]">Descripción de la situación.</label>
                    <textarea
                        name="description"
                        id="description"
                        placeholder="Ej. Se observa almacenamiento de material pirotécnico en un domicilio particular. . ."
                        class="min-h-32 w-full rounded-xl border border-[#d6e0e4] bg-white p-3.5 text-sm leading-relaxed text-[#10222b] shadow-sm transition-colors placeholder:text-[#5e6b73] focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none"
                        >{{ old('description') }}</textarea
                    >
                    @error ('description')
                        <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                    @enderror
                    <label class="text-sm font-medium text-[#10222b]">Fotografías (opcional)</label>
                    <input
                        type="file"
                        name="images[]"
                        multiple
                        accept="image/jpg,image/jpeg,image/png,image/webp"
                        class="rounded-xl border border-[#d6e0e4] bg-white p-2.5 text-sm text-[#5e6b73] shadow-sm transition-colors file:mr-3 file:cursor-pointer file:rounded-lg file:border-0 file:bg-[#0f7688] file:px-3 file:py-1.5 file:text-sm file:font-medium file:text-[#f8fdfd] hover:file:bg-[#0b5a68]" />
                    @error ('images')
                        <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                    @enderror
                    @error ('images.*')
                        <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                    @enderror
                </div>
                <button
                    type="submit"
                    class="inline-flex cursor-pointer items-center justify-center rounded-xl bg-[#df1b27] px-4 py-3 text-center text-sm font-semibold text-white transition-colors hover:bg-[#b3141e]">
                    Enviar reporte
                </button>
            </form>
        </div>
    </section>

@endsection
