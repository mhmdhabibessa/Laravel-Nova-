<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //

    public function show()
    {
        $project = Project::all();    
        return view('project.show', compact('project'));
    }

    public function index(Project $project)
    {

        return view('projects.index', ['project' => $project]);
    }
}
