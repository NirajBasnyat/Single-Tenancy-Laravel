<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store()
    {
        Project::create([
            'name' => \request()->name
        ]);

        return redirect()->back();
    }

    public function show(Project $project)
    {
        return view('Tenant.Projects.show',compact('project'));
    }
}
