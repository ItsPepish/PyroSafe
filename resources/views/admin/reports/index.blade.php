@extends ('layouts.admin')

@section('title', 'Reportes')
@section ('content')
    <div class="flex flex-col gap-5">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-semibold text-[#10222b]">Reportes ciudadanos</h1>
            <span class="text-sm text-[#5e6b73]">{{ $reports->total() }} reportes</span>
        </div>

        @if (session('success'))
            <p class="rounded-xl border border-[#0f7688]/30 bg-[#0f7688]/8 px-4 py-3 text-center text-sm font-medium text-[#0f7688]">{{ session('success') }}</p>
        @endif

        <div class="overflow-hidden rounded-2xl border border-[#d6e0e4] bg-white">
            <div class="overflow-x-auto">
                <table class="w-full min-w-205 text-left text-sm">
                    <thead>
                        <tr class="border-b border-[#d6e0e4] bg-[#ecf3f5] text-xs font-semibold tracking-wide text-[#5e6b73] uppercase">
                            <th class="px-5 py-3.5">Folio</th>
                            <th class="px-5 py-3.5">Tipo</th>
                            <th class="px-5 py-3.5">Urgencia</th>
                            <th class="px-5 py-3.5">Estado</th>
                            <th class="px-5 py-3.5">Dirección</th>
                            <th class="px-5 py-3.5">Fecha</th>
                            <th class="px-5 py-3.5 text-right">Detalles</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#d6e0e4]">
                        @forelse ($reports as $report)
                            <tr class="transition-colors hover:bg-[#ecf3f5]/50">
                                <td class="px-5 py-4 font-mono text-xs font-medium text-[#10222b]">{{ $report->folio }}</td>
                                <td class="px-5 py-4 text-[#10222b]">{{ $report->type->label() }}</td>
                                <td class="px-5 py-4">
                                    <span
                                        class="inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium {{ $report->urgency->badgeClasses() }}">
                                        {{ $report->urgency->label() }}
                                    </span>
                                </td>
                                <td class="px-5 py-4">
                                    <span
                                        class="inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium {{ $report->status->badgeClasses() }}">
                                        {{ $report->status->label() }}
                                    </span>
                                </td>
                                <td class="px-5 py-4 text-[#5e6b73]">{{ $report->street_address }}</td>
                                <td class="px-5 py-4 font-mono text-xs text-[#5e6b73]">{{ $report->created_at->format('d/m/Y H:i') }}</td>
                                <td class="px-5 py-4">
                                    <div class="flex justify-end">
                                        <a
                                            href="{{ route('admin.reports.show', $report) }}"
                                            class="inline-flex items-center gap-1 text-sm font-medium text-[#0f7688] transition-colors hover:text-[#0b5a68]">
                                            Ver detalles
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-5 py-12 text-center text-sm text-[#5e6b73]">No hay reportes registrados.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        {{ $reports->links() }}
    </div>

@endsection
