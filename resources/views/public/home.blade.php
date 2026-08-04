@extends('layouts.public')

@section('content')
    
    <section class="relative h-screen w-full overflow-hidden">
        <img src="{{ Vite::asset('resources/images/tultepec02.webp') }}" alt="" class="absolute inset-0 h-full w-full object-cover">
         <div class="absolute inset-0 bg-black/75"></div>
        <div class="relative z-5">
            contenido
        </div>
    </section>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
@endsection