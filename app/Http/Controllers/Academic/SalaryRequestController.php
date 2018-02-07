<?php

namespace App\Http\Controllers\Academic\Teachers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserSalaryRequest;
use App\SalaryRequest;

class SalaryRequestController extends Controller
{
    public function index()
    {
        $salary_requests = UserSalaryRequest::all();
        return view('academic.salary-requests.index')->with('requests', $salary_requests);

    }

    /**
     * Show each salary request.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($request)
    {
        $request = SalaryRequest::where('id', $request)->first();
        return view('academic.salary-requests.show')->with('request', $request);
    }

}
