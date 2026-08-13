@extends ('layouts.public')

@section ('content')
    <section class="bg-[#10222b] text-[#dee6e9]">
        <div class="mx-auto flex max-w-6xl flex-col gap-5 px-4 py-14 sm:px-6">
            <h1 class="text-3xl font-semibold sm:text-4xl">
                Reportar una situación de riesgo
            </h1>
            <p class="max-w-2xl text-[#dee6e9]/80">Tu reporte es anónimo y confidencial. La información se canaliza a las autoridades competentes para su atención.</p>
        </div>
    </section>

    <section>
        <div class="mx-auto max-w-6xl px-4 py-14 sm:px-6">
            <form
                action="{{ route('reports.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="flex flex-col gap-5"
            >
                @csrf

                <div
                    class="flex flex-col gap-4 rounded-2xl border border-gray-300/50 p-6 shadow-sm"
                >
                    <h2 class="font-semibold">1. Tipo de situación</h2>
                    <p>Selecciona la opción que mejor describa lo que observaste.</p>
                    <div class="grid grid-cols-2 gap-3 text-start">
                        @foreach ($reportTypes as $reportType)
                            <label>
                                <input
                                    type="radio"
                                    name="type"
                                    value="{{ $reportType->value }}"
                                    class="peer sr-only"
                                />
                                <div
                                    class="h-full cursor-pointer content-center rounded-2xl border border-gray-300 px-2 py-2 text-center text-xs peer-checked:border-[#0f7688] peer-checked:bg-[#ecf3f5] peer-checked:text-[#0f7688] md:px-4 md:text-start md:text-base"
                                >
                                    {{ $reportType->label() }}
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div
                    class="flex flex-col gap-4 rounded-2xl border border-gray-300/50 p-6 shadow-sm"
                >
                    <h2 class="font-semibold">2. Nivel de urgencia</h2>
                    <p>Selecciona el nivel de urgencia para la situación.</p>
                    <div class="grid grid-cols-3 gap-3 text-start">
                        @foreach ($reportUrgencies as $reportUrgency)
                            <label>
                                <input
                                    type="radio"
                                    name="urgency"
                                    value="{{ $reportUrgency->value }}"
                                    class="peer sr-only"
                                />
                                <div
                                    class="cursor-pointer rounded-2xl border border-gray-300 px-2 py-2 text-center text-xs md:px-4 md:text-start md:text-base {{ $reportUrgency->checkedClasses() }}"
                                >
                                    {{ $reportUrgency->label() }}
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div
                    class="flex flex-col gap-4 rounded-2xl border border-gray-300/50 p-6 shadow-sm"
                >
                    <h2 class="font-semibold">3. Ubicación</h2>
                    <p>Indica dónde ocurre la situación.</p>
                    <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
                        <div class="flex flex-col gap-2">
                            <label for="street_address">Dirección</label>
                            <div class="relative">
                                <input
                                    type="text"
                                    name="street_address"
                                    id="street_address"
                                    placeholder="Ej. Centro Tultepec"
                                    class="w-full rounded-md border border-gray-300/50 px-4 py-2 pr-12 shadow-sm"
                                />
                                <button
                                    data-search-address
                                    type="button"
                                    class="absolute top-1/2 right-2 size-8 -translate-y-1/2 rounded-full"
                                >
                                    ⌕
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label for="address_reference"
                                >Referencia (opcional)</label
                            >
                            <input
                                type="text"
                                name="address_reference"
                                id="address_reference"
                                placeholder="Ej. Hay una tienda verde, enfrente de un terreno verdoso."
                                class="w-full rounded-md border border-gray-300/50 px-4 py-2 shadow-sm"
                            />
                        </div>
                    </div>
                    <div
                        data-report-map
                        class="z-0 h-120 rounded-2xl border border-gray-300"
                        id="map"
                    ></div>
                    <button
                        data-use-current-location
                        type="button"
                        class="rounded-2xl bg-red-200 p-2"
                    >
                        Usar mi ubicación actual
                    </button>
                    <input type="text" name="latitude" readonly hidden />
                    <input type="text" name="longitude" readonly hidden />
                </div>

                <div
                    class="flex flex-col gap-4 rounded-2xl border border-gray-300/50 p-6 shadow-sm"
                >
                    <h2 class="font-semibold">4. Descripción</h2>
                    <p>Cuéntanos con tus palabras qué está pasando.</p>
                    <label for="description"
                        >Descripción de la situación.</label
                    >
                    <textarea
                        name="description"
                        id="description"
                        placeholder="Ej. Se observa almacenamiento de material pirotécnico en un domicilio particular. . ."
                        class="w-full rounded-md border border-gray-300/50 px-4 py-2 pr-12 shadow-sm"
                    ></textarea>
                    <p>Fotografías (opcional)</p>
                    <input
                        type="file"
                        name="images[]"
                        multiple
                        accept="image/jpg,image/jpeg,image/png,image/webp"
                    />
                </div>
                <button
                    type="submit"
                    class="cursor-pointer rounded-lg bg-red-600 px-2 py-2 text-center font-semibold text-white transition-colors hover:bg-red-700"
                >
                    Enviar reporte
                </button>
            </form>
        </div>
    </section>

@endsection
