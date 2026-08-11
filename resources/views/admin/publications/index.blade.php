@extends('layouts.admin')

@section('content')

<div class="flex flex-col gap-5">
    <div class="flex justify-end">
        <a href="{{ route('admin.publications.create') }}" class="bg-[#0f7688] text-white rounded-xl px-4 py-2">Nueva Publicación</a>
    </div>
    @if(session('success'))
    <div>
        <p class="rounded-2xl bg-[#10222b] text-[#dee6e9] px-4 py-2 text-center">{{ session('success') }}</p>
    </div>
    @endif
    <div class="overflow-hidden rounded-2xl border border-[#d6e0e4] bg-white">
        <div class="overflow-x-auto">
            <table class="w-full min-w-205 text-left text-sm">
                <thead>
                    <tr class="border-b border-[#d6e0e4] bg-[#ecf3f5] font-semibold uppercase text-xs text-[#5e6b73]">
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
                    @forelse($publications as $publication)
                    <tr class="transition-colors hover:bg-[#ecf3f5]/50">
                        <td class="px-5 py-4"><img src="{{ Storage::url($publication->coverImage->path) }}" alt="{{ $publication->coverImage->alt_text }}" class="w-48 aspect-video object-cover rounded-lg"></td>
                        <td class="px-5 py-4">{{ $publication->title }}</td>
                        <td class="px-5 py-4">{{ $publication->category->name }}</td>
                        <td class="px-5 py-4">{{ $publication->user->name }}</td>
                        <td class="px-5 py-4">{{ $publication->status->label() }}</td>
                        <td class="px-5 py-4">{{ $publication->published_at ? $publication->published_at->format('d/m/Y') : 'Sin publicar' }}</td>
                        <td class="px-5 py-4">{{ $publication->updated_at->format('d/m/Y H:i') }}</td>
                        <td class="px-5 py-4">
                            <div class="flex items-center gap-4">
                                <a href="{{ route('admin.publications.edit', $publication) }}" class="inline-flex items-center gap-1 text-sm font-medium text-[#0f7688] transition-colors hover:text-[#0b5a68]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil size-3.5" aria-hidden="true">
                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                        <path d="m15 5 4 4"></path>
                                    </svg>
                                    Editar
                                </a>
                                <a href="#" class="inline-flex items-center gap-1 text-sm font-medium text-[#df1b27] transition-colors hover:text-[#b3141e]">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2 size-3.5" aria-hidden="true">
                                        <path d="M3 6h18"></path>
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                    </svg>
                                    Eliminar
                                </a>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8"  class="py-8 text-center">No hay publicaciones</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    {{ $publications->links() }}
</div>

@endsection