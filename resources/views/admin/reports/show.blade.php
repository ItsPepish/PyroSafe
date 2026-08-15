@extends ('layouts.admin')

@section ('content')
    <div class="flex h-full flex-col gap-5">
        <a
            href="{{ route('admin.reports.index') }}"
            class="inline-flex items-center gap-1.5 self-start text-sm font-medium text-[#0f7688] transition-colors hover:text-[#0b5a68]"
            >&larr; Volver al listado del reporte</a
        >
        <div class="flex flex-col gap-2">
            <h1 class="text-4xl font-bold text-[#10222b]">Folio: {{ $report->folio }}</h1>
            <p class="text-lg text-[#5e6b73]">Revisa la información detallada del reporte.</p>
        </div>

        <section class="flex h-full flex-col gap-2 rounded-2xl border border-[#d6e0e4] bg-[#ecf3f5] p-4">
            <h2 class="text-lg font-semibold text-[#10222b]">Información de la situación</h2>
            <div class="flex flex-wrap items-center gap-8">
                <p class="text-sm text-[#10222b]"><span class="font-medium text-[#5e6b73]">Fecha de la situación:</span> {{ $report->created_at->format('d/m/Y H:i') }}</p>
                <p class="text-sm text-[#10222b]"><span class="font-medium text-[#5e6b73]">Tipo de situación:</span> {{ $report->type->label() }}</p>
                <p class="text-sm text-[#10222b]"><span class="font-medium text-[#5e6b73]">Nivel de urgencia:</span> {{ $report->urgency->label() }}</p>
                <form action="{{ route('admin.reports.update-status', $report) }}" method="POST" class="flex flex-wrap items-center gap-2">
                    @csrf
                    @method ('PATCH')
                    <label for="status" class="text-sm font-medium text-[#5e6b73]">Estado del reporte: </label>
                    <select
                        name="status"
                        id="status"
                        class="h-10 rounded-xl border border-[#d6e0e4] bg-white px-3 text-sm text-[#10222b] shadow-sm transition-colors focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none">
                        @foreach ($statuses as $status)
                            <option value="{{ $status->value }}" @selected (old('status', $report->status->value) == $status->value)>
                                {{ $status->label() }}
                            </option>
                        @endforeach
                    </select>
                    @error ('status')
                        <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                    @enderror
                    <button
                        type="submit"
                        class="inline-flex h-10 cursor-pointer items-center rounded-xl bg-[#0f7688] px-4 text-sm font-medium text-[#f8fdfd] transition-colors hover:bg-[#0b5a68]">
                        Actualizar estado
                    </button>
                </form>
            </div>

            <p class="text-sm text-[#10222b]"><span class="font-medium text-[#5e6b73]">Dirección de la situación:</span> {{ $report->street_address }}</p>
            <p class="text-sm text-[#10222b]"><span class="font-medium text-[#5e6b73]">Referencia adicional:</span> {{ $report->address_reference ?? 'Sin referencia adicional.' }}</p>
            <p class="text-sm leading-relaxed text-[#10222b]"><span class="font-medium text-[#5e6b73]">Descripción de la situación:</span> {{ $report->description }}</p>
        </section>

        <section class="flex h-full flex-col gap-2 rounded-2xl border border-[#d6e0e4] bg-[#ecf3f5] p-4">
            <h2 class="text-lg font-semibold text-[#10222b]">Ubicación de la situación</h2>
            <div
                data-admin-report-map
                data-latitude="{{ $report->latitude }}"
                data-longitude="{{ $report->longitude }}"
                class="h-96 rounded-2xl border border-[#d6e0e4]"
                id="map"></div>
        </section>

        <section class="flex flex-col gap-2 rounded-2xl border border-[#d6e0e4] bg-[#ecf3f5] p-4">
            <h2 class="text-lg font-semibold text-[#10222b]">Fotografías</h2>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-6">
                @forelse ($report->images as $image)
                    <img src="{{ asset('storage/'.$image->path) }}" alt="" class="w-full" />
                @empty
                    <p class="text-sm text-[#5e6b73] md:col-span-2 lg:col-span-6">Este reporte no tiene fotografías.</p>
                @endforelse
            </div>
        </section>
    </div>

@endsection
