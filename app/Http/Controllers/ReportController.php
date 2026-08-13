<?php

namespace App\Http\Controllers;

use App\Enums\ReportType;
use App\Enums\ReportUrgency;

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

    public function store() {
        
    }
}
