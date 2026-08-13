<?php

namespace App\Http\Controllers;

use App\Actions\CreateReportAction;
use App\Enums\ReportType;
use App\Enums\ReportUrgency;
use App\Http\Requests\StoreReportRequest;

class ReportController extends Controller
{
    public function create() {
        $reportTypes = ReportType::cases();
        $reportUrgencies = ReportUrgency::cases();

        return view('public.report', [
            'reportTypes' => $reportTypes,
            'reportUrgencies' => $reportUrgencies,
        ]);
    }

    public function store(StoreReportRequest $request, CreateReportAction $createReport) {
        $createReport->execute($request->validated(), $request->ip());
        return redirect()
            ->route('reports.create')
            ->with('success', 'Reporte creada correctamente');
    }
}
