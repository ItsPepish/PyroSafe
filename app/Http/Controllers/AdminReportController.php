<?php

namespace App\Http\Controllers;

use App\Enums\ReportStatus;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminReportController extends Controller
{
    public function index()
    {
        $reports = Report::with('images')
            ->latest()
            ->paginate(10);

        return view('admin.reports.index', [
            'reports' => $reports,
        ]);
    }

    public function show(Report $report)
    {
        $report->load('images');
        $statuses = ReportStatus::cases();

        return view('admin.reports.show', [
            'report' => $report,
            'statuses' => $statuses,
        ]);
    }

    public function updateStatus(Request $request, Report $report)
    {
        $validated = $request->validate([
            'status' => ['required', Rule::enum(ReportStatus::class)],
        ]);

        $report->update([
            'status' => $validated['status'],
        ]);

        return redirect()
            ->route('admin.reports.show', $report)
            ->with('success', 'Estado actualizado correctamente');
    }
}
