@extends ('layouts.admin')

@section('title', 'Establecimientos')
@section ('content')
    <div class="flex h-full flex-col gap-5">
        <div class="flex flex-col gap-2">
            <h1 class="text-2xl font-semibold text-[#10222b]">Editar establecimiento</h1>
            <p class="text-sm text-[#5e6b73]">Edita la información necesaria para el establecimiento autorizado.</p>
        </div>
        <form
            action="{{ route('admin.establishments.update', $establishment) }}"
            method="POST"
            class="flex h-full flex-col gap-4 rounded-2xl border border-[#d6e0e4] bg-white p-6">
            @csrf
            @method ('PATCH')
            <div class="flex flex-col gap-2">
                <label for="name" class="text-sm font-medium text-[#10222b]">Nombre del establecimiento</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name', $establishment->name) }}"
                    class="h-11 rounded-xl border border-[#d6e0e4] bg-white px-3.5 text-sm text-[#10222b] shadow-sm transition-colors placeholder:text-[#5e6b73] focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none" />
                @error ('name')
                    <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="description" class="text-sm font-medium text-[#10222b]">Descripción del establecimiento</label>
                <input
                    type="text"
                    name="description"
                    id="description"
                    value="{{ old('description', $establishment->description) }}"
                    class="h-11 rounded-xl border border-[#d6e0e4] bg-white px-3.5 text-sm text-[#10222b] shadow-sm transition-colors placeholder:text-[#5e6b73] focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none" />
                @error ('description')
                    <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-5">
                <div class="flex flex-col gap-2">
                    <label for="is_visible" class="text-sm font-medium text-[#10222b]">Visible</label>
                    <div
                        class="flex h-11 items-center gap-2 rounded-xl border border-[#d6e0e4] bg-white px-3.5 shadow-sm transition-colors focus-within:border-[#0f7688] focus-within:ring-3 focus-within:ring-[#0f7688]/25">
                        <input type="hidden" name="is_visible" value="0" />
                        <input
                            type="checkbox"
                            name="is_visible"
                            id="is_visible"
                            value="1"
                            @checked (old('is_visible', $establishment->is_visible))
                            class="size-4 rounded border-[#d6e0e4] accent-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none" />
                    </div>
                </div>
                <div class="flex w-full flex-col gap-2">
                    <label for="business_hours" class="text-sm font-medium text-[#10222b]">Horario de atención</label>
                    <input
                        type="text"
                        name="business_hours"
                        id="business_hours"
                        value="{{ old('business_hours', $establishment->business_hours) }}"
                        class="h-11 rounded-xl border border-[#d6e0e4] bg-white px-3.5 text-sm text-[#10222b] shadow-sm transition-colors placeholder:text-[#5e6b73] focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none" />
                    @error ('business_hours')
                        <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex w-full flex-col gap-2">
                    <label for="phone" class="text-sm font-medium text-[#10222b]">Número telefónico</label>
                    <input
                        type="text"
                        name="phone"
                        id="phone"
                        value="{{ old('phone', $establishment->phone) }}"
                        class="h-11 rounded-xl border border-[#d6e0e4] bg-white px-3.5 text-sm text-[#10222b] shadow-sm transition-colors placeholder:text-[#5e6b73] focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none" />
                    @error ('phone')
                        <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <label for="address" class="text-sm font-medium text-[#10222b]">Ubicación del establecimiento</label>
                <div class="flex flex-col gap-2">
                    <div class="relative">
                        <input
                            type="text"
                            name="address"
                            id="address"
                            value="{{ old('address', $establishment->address) }}"
                            class="h-11 w-full rounded-xl border border-[#d6e0e4] bg-white px-3.5 pr-12 text-sm text-[#10222b] shadow-sm transition-colors placeholder:text-[#5e6b73] focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none" />
                        <button
                            data-establishment-search-address
                            type="button"
                            class="absolute top-1/2 right-2 grid size-8 -translate-y-1/2 place-items-center rounded-full text-[#5e6b73] transition-colors hover:bg-[#ecf3f5] hover:text-[#0f7688]">
                            ⌕
                        </button>
                    </div>
                    @error ('address')
                        <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                    @enderror
                </div>
                <div data-establishment-map class="z-0 h-120 rounded-2xl border border-[#d6e0e4]" id="map"></div>
                @error ('latitude')
                    <p class="text-sm text-[#df1b27]">Selecciona un punto en el mapa.</p>
                @enderror
                <input type="hidden" name="latitude" value="{{ old('latitude', $establishment->latitude) }}" />
                <input type="hidden" name="longitude" value="{{ old('longitude', $establishment->longitude) }}" />
            </div>

            <div class="flex justify-end gap-3 border-t border-[#d6e0e4] pt-4">
                <a
                    href="{{ route('admin.establishments.index') }}"
                    class="inline-flex items-center rounded-xl border border-[#d6e0e4] bg-white px-4 py-2 text-sm font-medium text-[#10222b] transition-colors hover:bg-[#ecf3f5]"
                    >Volver</a
                >
                <button
                    type="submit"
                    class="inline-flex cursor-pointer items-center rounded-xl bg-[#0f7688] px-4 py-2 text-sm font-medium text-[#f8fdfd] transition-colors hover:bg-[#0b5a68]">
                    Editar establecimiento
                </button>
            </div>
        </form>
    </div>

@endsection
