<?php

namespace App\Http\Controllers\Tenant;

use App\Models\Company;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // $projects = $company->projects;

        return view('tenant.dashboard', [
            'projects' => Project::all(),
        ]);
    }
}
