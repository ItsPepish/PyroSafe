@extends ('layouts.admin')

@section ('content')
    <div class="flex flex-col gap-5">
        <div class="flex items-center justify-between">
            <div class="flex flex-col">
                <h1 class="text-2xl font-semibold text-[#10222b]">Establecimientos</h1>
                <p class="text-sm text-[#5e6b73]">{{ $establishments->total() }} establecimientos registrados</p>
            </div>
            <a
                href="{{ route('admin.establishments.create') }}"
                class="inline-flex items-center rounded-xl bg-[#0f7688] px-4 py-2 text-sm font-medium text-[#f8fdfd] transition-colors hover:bg-[#0b5a68]"
                >Nuevo Establecimiento</a
            >
        </div>

        @if (session('success'))
            <p class="rounded-xl border border-[#0f7688]/30 bg-[#0f7688]/8 px-4 py-3 text-center text-sm font-medium text-[#0f7688]">{{ session('success') }}</p>
        @endif

        <div class="overflow-hidden rounded-2xl border border-[#d6e0e4] bg-white">
            <div class="overflow-x-auto">
                <table class="w-full min-w-205 text-left text-sm">
                    <thead>
                        <tr class="border-b border-[#d6e0e4] bg-[#ecf3f5] text-xs font-semibold tracking-wide text-[#5e6b73] uppercase">
                            <th class="px-5 py-3.5">ID</th>
                            <th class="px-5 py-3.5">Nombre</th>
                            <th class="px-5 py-3.5">Dirección</th>
                            <th class="px-5 py-3.5">Hora de atención</th>
                            <th class="px-5 py-3.5">Número telefónico</th>
                            <th class="px-5 py-3.5">Visible/Oculto</th>
                            <th class="px-5 py-3.5">Última actualización</th>
                            <th class="px-5 py-3.5">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#d6e0e4]">
                        @forelse ($establishments as $establishment)
                            <tr class="transition-colors hover:bg-[#ecf3f5]/50">
                                <td class="px-5 py-4 font-medium text-[#10222b]">{{ $establishment->id }}</td>
                                <td class="px-5 py-4 font-medium text-[#10222b]">{{ $establishment->name }}</td>
                                <td class="px-5 py-4 text-[#5e6b73]">{{ $establishment->address }}</td>
                                <td class="px-5 py-4 text-[#5e6b73]">{{ $establishment->business_hours }}</td>
                                <td class="px-5 py-4 text-[#5e6b73]">{{ $establishment->phone }}</td>
                                <td class="px-5 py-4 text-[#5e6b73]">{{ $establishment->is_visible ? 'Visible' : 'Oculto' }}</td>
                                <td class="px-5 py-4 text-[#5e6b73]">{{ $establishment->updated_at->format('d/m/Y H:i') }}</td>
                                <td class="px-5 py-4">
                                    <div class="flex items-center justify-end gap-4">
                                        <a
                                            href="{{ route('admin.establishments.edit', $establishment) }}"
                                            class="inline-flex items-center gap-1 text-sm font-medium text-[#0f7688] transition-colors hover:text-[#0b5a68]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil size-3.5" aria-hidden="true">
                                                <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                <path d="m15 5 4 4"></path>
                                            </svg>
                                            Editar
                                        </a>
                                        <form
                                            action="{{ route('admin.establishments.destroy', $establishment) }}"
                                            method="POST"
                                            data-delete-form>
                                            @csrf
                                            @method ('DELETE')
                                            <button
                                                type="button"
                                                data-delete-button
                                                data-delete-title="{{ $establishment->name }}"
                                                class="inline-flex cursor-pointer items-center gap-1 text-sm font-medium text-[#df1b27] transition-colors hover:text-[#b3141e]">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2 size-3.5" aria-hidden="true">
                                                    <path d="M3 6h18"></path>
                                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                    <line x1="10" x2="10" y1="11" y2="17"></line>
                                                    <line x1="14" x2="14" y1="11" y2="17"></line>
                                                </svg>
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-5 py-12 text-center text-sm text-[#5e6b73]">No hay establecimientos</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        {{ $establishments->links() }}
    </div>
@endsection
