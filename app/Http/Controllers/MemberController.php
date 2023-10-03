<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'memberName' => 'required|string',
                'Position' => 'required|string',
                'BU' => 'required|string',
                'Batch' => 'required|string',
            ]);

            $member = Member::create($validatedData);

            \Log::info('Member created successfully', ['data' => $member]);

            return response()->json(['message' => 'Member created successfully', 'data' => $member], 201);
        } catch (\Exception $e) {
            \Log::error($e);

            return response()->json(['message' => 'Error creating member'], 500);
        }
    }
}