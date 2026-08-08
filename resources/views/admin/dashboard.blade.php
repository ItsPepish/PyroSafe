@extends('layouts.admin')

@section('content')
<div class="space-y-6">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
        <div class="border border-[#d6e0e4] rounded-2xl p-4">
            <div class="flex flex-row justify-between">
                <p class="text-red-500 font-bold text-3xl md:text-6xl">2</p>
                <div class="flex items-center justify-center bg-red-200 rounded-lg w-8 h-8">
                    <div class="bg-red-500 rounded-full h-4 w-4"></div>
                </div>
            </div>
            <p>Reportes pendientes</p>
            <p class="text-red-500 font-semibold">Sin atender</p>
        </div>
        <div class="border border-[#d6e0e4] rounded-2xl p-4">
            <div class="flex flex-row justify-between">
                <p class="text-yellow-500 font-bold text-3xl md:text-6xl">2</p>
                <div class="flex items-center justify-center bg-yellow-200 rounded-lg w-8 h-8">
                    <div class="bg-yellow-500 rounded-full h-4 w-4"></div>
                </div>
            </div>
            <p>Reportes en revisión</p>
            <p class="text-yellow-500 font-semibold">En proceso</p>
        </div>
        <div class="border border-[#d6e0e4] rounded-2xl p-4">
            <div class="flex flex-row justify-between">
                <p class="text-green-500 font-bold text-3xl md:text-6xl">2</p>
                <div class="flex items-center justify-center bg-green-200 rounded-lg w-8 h-8">
                    <div class="bg-green-500 rounded-full h-4 w-4"></div>
                </div>
            </div>
            <p>Reportes atendidos</p>
            <p class="text-green-500 font-semibold">Cerrados</p>
        </div>
        <div class="border border-[#d6e0e4] rounded-2xl p-4">
            <div class="flex flex-row justify-between">
                <p class="text-sky-500 font-bold text-3xl md:text-6xl">2</p>
                <div class="flex items-center justify-center bg-sky-200 rounded-lg w-8 h-8">
                    <div class="bg-sky-500 rounded-full h-4 w-4"></div>
                </div>
            </div>
            <p>Total de reportes</p>
            <p class="text-sky-500 font-semibold">Este mes</p>
        </div>
    </div>
    <div>
        
    </div>
</div>
@endsection('content')