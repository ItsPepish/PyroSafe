@extends('layouts.admin')

@section('content')

<div class="flex flex-col h-full gap-5">
    <div class="flex flex-col gap-2">
        <h1 class="text-4xl font-bold">Editar publicación</h1>
        <p class="text-lg text-[#5e6b73]">Edita los cambios necesarios para el articulo.</p>
    </div>
    <form action="{{ route('admin.publications.update', $publication) }}" method="POST" enctype="multipart/form-data" class="flex flex-col h-full border border-[#d6e0e4] bg-[#ecf3f5] rounded-2xl p-4 gap-2">
        @csrf
        @method('PATCH')
        <label for="title" class="text-xl font-bold">Titulo</label>
        <input type="text" name="title" id="title" placeholder="Ej: Qué hacer antes de una quema." value="{{ old('title', $publication->title) }}" class="border border-[#d6e0e4] rounded-xl p-2">
        @error('title')
            <p class="text-sm text-[#b42318]">{{ $message }}</p>
        @enderror

        <label for="summary" class="text-xl font-bold">Resumen</label>
        <input type="text" name="summary" id="summary" placeholder="Breve descripción del contenido. . ." value="{{ old('summary', $publication->summary) }}" class="border border-[#d6e0e4] rounded-xl p-2">
        @error('summary')
            <p class="text-sm text-[#b42318]">{{ $message }}</p>
        @enderror

        <label for="content" class="text-xl font-bold">Contenido</label>
        <textarea name="content" id="content" placeholder="Redacta el cuerpo del artículo. . ." class="border border-[#d6e0e4] rounded-xl p-2 h-full">{{ old('content', $publication->content) }}</textarea>
        @error('content')
            <p class="text-sm text-[#b42318]">{{ $message }}</p>
        @enderror

        <label for="cover_image" class="text-xl font-bold">Imagen de Portada</label>
        <input type="file" name="cover_image" id="cover_image" accept="image/jpg,image/jpeg,image/png,image/webp" class="border border-[#d6e0e4] rounded-xl p-2">
        @error('cover_image')
            <p class="text-sm text-[#b42318]">{{ $message }}</p>
        @enderror
        
        <div class="grid grid-cols-2 gap-5">
            <div class="flex flex-col gap-2">
                <label for="category_id" class="text-xl font-bold">Categoria</label>
                <select name="category_id" id="category_id" class="border border-[#d6e0e4] rounded-xl p-2">
                    <option value="" disabled @selected(! old('category_id'))>-- Seleccionar --</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" @selected(old('category_id', $publication->category_id) == $category->id)>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-sm text-[#b42318]">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label for="status" class="text-xl font-bold">Estado</label>
                <select name="status" id="status" class="border border-[#d6e0e4] rounded-xl p-2">
                    @foreach($statuses as $status)
                    <option value="{{ $status->value }}" @selected(old('status', $publication->status->value) == $status->value)>{{ $status->label() }}</option>
                    @endforeach
                </select>
                @error('status')
                    <p class="text-sm text-[#b42318]">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="flex justify-end-safe gap-2">
            <a href="{{ route('admin.publications.index') }}" class="border border-[#d6e0e4] bg-white rounded-xl px-4 py-2">Volver</a>
            <button type="submit" class="bg-[#0f7688] text-white rounded-xl px-4 py-2 cursor-pointer">Editar publicación</button>
        </div>
    </form>
</div>

@endsection