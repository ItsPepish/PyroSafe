@extends ('layouts.admin')

@section ('content')
    <div class="flex flex-col gap-5">
        <div class="flex justify-end">
            <a
                href="{{ route('admin.publications.create') }}"
                class="rounded-xl bg-[#0f7688] px-4 py-2 text-white"
                >Nueva Publicación</a
            >
        </div>
        @if (session('success'))
            <div>
                <p class="rounded-2xl bg-[#10222b] px-4 py-2 text-center text-[#dee6e9]">{{ session('success') }}</p>
            </div>
        @endif
        <div
            class="overflow-hidden rounded-2xl border border-[#d6e0e4] bg-white"
        >
            <div class="overflow-x-auto">
                <table class="w-full min-w-205 text-left text-sm">
                    <thead>
                        <tr
                            class="border-b border-[#d6e0e4] bg-[#ecf3f5] text-xs font-semibold text-[#5e6b73] uppercase"
                        >
                            <th class="px-5 py-3.5">Portada</th>
                            <th class="px-5 py-3.5">Título</th>
                            <th class="px-5 py-3.5">Categoría</th>
                            <th class="px-5 py-3.5">Autor</th>
                            <th class="px-5 py-3.5">Estado</th>
                            <th class="px-5 py-3.5">Publicado</th>
                            <th class="px-5 py-3.5">Actualizado</th>
                            <th class="px-5 py-3.5">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#d6e0e4]">
                        @forelse ($publications as $publication)
                            <tr class="transition-colors hover:bg-[#ecf3f5]/50">
                                <td class="px-5 py-4">
                                    <img
                                        src="{{ Storage::url($publication->coverImage->path) }}"
                                        alt="{{ $publication->coverImage->alt_text }}"
                                        class="aspect-video w-48 rounded-lg object-cover"
                                    />
                                </td>
                                <td class="px-5 py-4">
                                    {{ $publication->title }}
                                </td>
                                <td class="px-5 py-4">
                                    {{ $publication->category->name }}
                                </td>
                                <td class="px-5 py-4">
                                    {{ $publication->user->name }}
                                </td>
                                <td class="px-5 py-4">
                                    {{ $publication->status->label() }}
                                </td>
                                <td class="px-5 py-4">
                                    {{ $publication->published_at ? $publication->published_at->format('d/m/Y') : 'Sin publicar' }}
                                </td>
                                <td class="px-5 py-4">
                                    {{ $publication->updated_at->format('d/m/Y H:i') }}
                                </td>
                                <td class="px-5 py-4">
                                    <div class="flex items-center gap-4">
                                        <a
                                            href="{{ route('admin.publications.edit', $publication) }}"
                                            class="inline-flex items-center gap-1 text-sm font-medium text-[#0f7688] transition-colors hover:text-[#0b5a68]"
                                        >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil size-3.5" aria-hidden="true">
                                                <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                <path d="m15 5 4 4"></path>
                                            </svg>
                                            Editar
                                        </a>
                                        <form
                                            action="{{ route('admin.publications.destroy', $publication) }}"
                                            method="POST"
                                            data-delete-form
                                        >
                                            @csrf
                                            @method ('DELETE')
                                            <button
                                                type="button"
                                                data-delete-button
                                                data-publication-title="{{ $publication->title }}"
                                                class="inline-flex cursor-pointer items-center gap-1 text-sm font-medium text-[#df1b27] transition-colors hover:text-[#b3141e]"
                                            >
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
                                <td colspan="8" class="py-8 text-center">
                                    No hay publicaciones
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        {{ $publications->links() }}
    </div>

    <div
        data-delete-modal
        class="fixed inset-0 z-50 flex hidden flex-col items-center justify-center bg-[#10222b]/40 p-4 backdrop-blur-sm"
    >
        <div class="flex flex-col gap-4 rounded-2xl bg-white p-5">
            <div class="flex flex-col items-center gap-4 text-center">
                <span
                    class="grid size-12 place-items-center rounded-full bg-[#df1b27]/12"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert size-6 text-[#df1b27]" aria-hidden="true">
                        <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                        <path d="M12 9v4"></path>
                        <path d="M12 17h.01"></path>
                    </svg>
                </span>
                <div class="flex flex-col gap-1.5">
                    <h2 class="text-lg font-semibold text-[#10222b]">
                        ¿Estás seguro de realizar dicha acción?
                    </h2>
                    <p class="text-sm text-[#5e6b73]">Vas a eliminar: <span data-delete-title class="font-medium text-[#10222b]"></span>.</p>
                    <p class="text-sm text-[#5e6b73]">Esta acción no se puede deshacer.</p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-3">
                <button
                    data-delete-cancel
                    class="cursor-pointer rounded-xl border border-[#d6e0e4] bg-white px-4 py-2 text-sm font-medium text-[#10222b] transition-colors hover:bg-[#ecf3f5]"
                >
                    Cancelar
                </button>
                <button
                    data-delete-confirm
                    class="cursor-pointer rounded-xl bg-[#df1b27] px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-[#b3141e]"
                >
                    Eliminar
                </button>
            </div>
        </div>
    </div>

@endsection
