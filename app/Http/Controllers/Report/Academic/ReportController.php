<?php

namespace App\Http\Controllers\Report\Academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\SalaryRequest;
use PDF;

class ReportController extends Controller
{
    public function salaryRequestPdfView($id)
    {
        $request = SalaryRequest::find($id);
        $pdf = PDF::loadView('reports.academic.salary_sheet', compact('request'));
        return $pdf->download('Salarysheet.pdf');
    }
}
