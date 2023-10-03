<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'ProjectName' => 'required|string',
            'Evaluator' => 'required|string',
            'EvalPeriod' => 'required|string',
            'WorkLoc' => 'required|string',
            'EvalDate' => 'required|date',
        ]);
    
        $project = Project::create($data);
    
        return response()->json(['message' => 'Project created successfully', 'project' => $project]);
    }
}
