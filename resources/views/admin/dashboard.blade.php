@extends ('layouts.admin')

@section ('content')
    <div class="space-y-6">
        <div class="grid grid-cols-2 gap-5 md:grid-cols-4">
            <div class="rounded-2xl border border-[#d6e0e4] p-4">
                <div class="flex flex-row justify-between">
                    <p class="text-3xl font-bold text-red-500 md:text-6xl">2</p>
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-red-200">
                        <div class="h-4 w-4 rounded-full bg-red-500"></div>
                    </div>
                </div>
                <p>Reportes pendientes</p>
                <p class="font-semibold text-red-500">Sin atender</p>
            </div>
            <div class="rounded-2xl border border-[#d6e0e4] p-4">
                <div class="flex flex-row justify-between">
                    <p class="text-3xl font-bold text-yellow-500 md:text-6xl">2</p>
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-yellow-200">
                        <div class="h-4 w-4 rounded-full bg-yellow-500"></div>
                    </div>
                </div>
                <p>Reportes en revisión</p>
                <p class="font-semibold text-yellow-500">En proceso</p>
            </div>
            <div class="rounded-2xl border border-[#d6e0e4] p-4">
                <div class="flex flex-row justify-between">
                    <p class="text-3xl font-bold text-green-500 md:text-6xl">2</p>
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-green-200">
                        <div class="h-4 w-4 rounded-full bg-green-500"></div>
                    </div>
                </div>
                <p>Reportes atendidos</p>
                <p class="font-semibold text-green-500">Cerrados</p>
            </div>
            <div class="rounded-2xl border border-[#d6e0e4] p-4">
                <div class="flex flex-row justify-between">
                    <p class="text-3xl font-bold text-sky-500 md:text-6xl">2</p>
                    <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-sky-200">
                        <div class="h-4 w-4 rounded-full bg-sky-500"></div>
                    </div>
                </div>
                <p>Total de reportes</p>
                <p class="font-semibold text-sky-500">Este mes</p>
            </div>
        </div>
        <div></div>
    </div>
@endsection ('content')
