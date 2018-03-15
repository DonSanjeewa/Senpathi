<?php

namespace App\Http\Controllers\ControlPanel;

use App\Events\ApprovalRequired;
use App\Subject;
use App\Teacher;
use App\Role;
use App\Approval;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }

}
