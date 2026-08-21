@extends ('layouts.admin')

@section('title', 'Publicaciones')
@section ('content')
    <div class="flex h-full flex-col gap-5">
        <div class="flex flex-col gap-2">
            <h1 class="text-2xl font-semibold text-[#10222b]">Editar publicación</h1>
            <p class="text-sm text-[#5e6b73]">Edita los cambios necesarios para el articulo.</p>
        </div>
        <form
            action="{{ route('admin.publications.update', $publication) }}"
            method="POST"
            enctype="multipart/form-data"
            class="flex h-full flex-col gap-4 rounded-2xl border border-[#d6e0e4] bg-white p-6">
            @csrf
            @method ('PATCH')
            <div class="flex flex-col gap-2">
                <label for="title" class="text-sm font-medium text-[#10222b]">Titulo</label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    placeholder="Ej: Qué hacer antes de una quema."
                    value="{{ old('title', $publication->title) }}"
                    class="h-11 rounded-xl border border-[#d6e0e4] bg-white px-3.5 text-sm text-[#10222b] shadow-sm transition-colors placeholder:text-[#5e6b73] focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none" />
                @error ('title')
                    <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="summary" class="text-sm font-medium text-[#10222b]">Resumen</label>
                <input
                    type="text"
                    name="summary"
                    id="summary"
                    placeholder="Breve descripción del contenido. . ."
                    value="{{ old('summary', $publication->summary) }}"
                    class="h-11 rounded-xl border border-[#d6e0e4] bg-white px-3.5 text-sm text-[#10222b] shadow-sm transition-colors placeholder:text-[#5e6b73] focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none" />
                @error ('summary')
                    <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex h-full flex-col gap-2">
                <label for="content" class="text-sm font-medium text-[#10222b]">Contenido</label>
                <textarea
                    name="content"
                    id="content"
                    placeholder="Redacta el cuerpo del artículo. . ."
                    class="h-full min-h-40 rounded-xl border border-[#d6e0e4] bg-white p-3.5 text-sm leading-relaxed text-[#10222b] shadow-sm transition-colors placeholder:text-[#5e6b73] focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none"
                    >{{ old('content', $publication->content) }}</textarea
                >
                @error ('content')
                    <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="cover_image" class="text-sm font-medium text-[#10222b]">Imagen de Portada</label>
                <input
                    type="file"
                    name="cover_image"
                    id="cover_image"
                    accept="image/jpg,image/jpeg,image/png,image/webp"
                    class="rounded-xl border border-[#d6e0e4] bg-white p-2.5 text-sm text-[#5e6b73] shadow-sm transition-colors file:mr-3 file:cursor-pointer file:rounded-lg file:border-0 file:bg-[#0f7688] file:px-3 file:py-1.5 file:text-sm file:font-medium file:text-[#f8fdfd] hover:file:bg-[#0b5a68] focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none" />
                @error ('cover_image')
                    <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 gap-5">
                <div class="flex flex-col gap-2">
                    <label for="category_id" class="text-sm font-medium text-[#10222b]">Categoria</label>
                    <select
                        name="category_id"
                        id="category_id"
                        class="h-11 rounded-xl border border-[#d6e0e4] bg-white px-3 text-sm text-[#10222b] shadow-sm transition-colors focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none">
                        <option value="" disabled @selected (! old('category_id'))>-- Seleccionar --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected (old('category_id', $publication->category_id) == $category->id)>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                    @error ('category_id')
                        <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <label for="status" class="text-sm font-medium text-[#10222b]">Estado</label>
                    <select
                        name="status"
                        id="status"
                        class="h-11 rounded-xl border border-[#d6e0e4] bg-white px-3 text-sm text-[#10222b] shadow-sm transition-colors focus-visible:border-[#0f7688] focus-visible:ring-3 focus-visible:ring-[#0f7688]/25 focus-visible:outline-none">
                        @foreach ($statuses as $status)
                            <option value="{{ $status->value }}" @selected (old('status', $publication->status->value) == $status->value)>
                                {{ $status->label() }}
                            </option>
                        @endforeach
                    </select>
                    @error ('status')
                        <p class="text-sm text-[#df1b27]">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end gap-3 border-t border-[#d6e0e4] pt-4">
                <a
                    href="{{ route('admin.publications.index') }}"
                    class="inline-flex items-center rounded-xl border border-[#d6e0e4] bg-white px-4 py-2 text-sm font-medium text-[#10222b] transition-colors hover:bg-[#ecf3f5]"
                    >Volver</a
                >
                <button
                    type="submit"
                    class="inline-flex cursor-pointer items-center rounded-xl bg-[#0f7688] px-4 py-2 text-sm font-medium text-[#f8fdfd] transition-colors hover:bg-[#0b5a68]">
                    Editar publicación
                </button>
            </div>
        </form>
    </div>

@endsection
