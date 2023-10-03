<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\ProjectEval;

class ProjectEvalController extends Controller 
{



    public function store(Request $request)
    {
    // Validate the incoming data
    $validatedData = $request->validate([
        'quality' => 'required|integer',
        'schedule' => 'required|integer',
        'contribution' => 'required|integer',
        'difficulty' => 'required|integer',
        'reporting' => 'required|integer',
        'technical_ability' => 'required|integer',
        'sense_of_ownership' => 'required|integer',
        'teamwork' => 'required|integer',
        'leadership' => 'required|integer',
        'time_commitment' => 'required|integer',
      
    ]);

    // Create a new ProjectEval model instance and save it to the database
    $projectEval = new ProjectEval($validatedData);
    $projectEval->save();


    return response()->json(['message' => 'Project evaluation saved successfully']);
}
}