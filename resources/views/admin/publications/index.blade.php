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
                                <button>Editar</button>
                                <button>Eliminar</button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8">No hay publicaciones</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    {{ $publications->links() }}
</div>

@endsection