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
        // Add validation rules for other fields
    ]);

    // Create a new ProjectEval model instance and save it to the database
    $projectEval = new ProjectEval($validatedData);
    $projectEval->save();

    // You can also associate the projectEval with a Project or Member
    // $projectEval->project()->associate($request->input('ProjectID'));
    // $projectEval->member()->associate($request->input('MemberID'));

    // Return a response indicating success
    return response()->json(['message' => 'Project evaluation saved successfully']);
}
}