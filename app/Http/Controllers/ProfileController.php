<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function store(Request $request)
     {
        $validated = $request->validate([
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ]);

        $profile = $request->user()
            ->profile()
            ->create($validated);

        return response()->json([
            'message' => 'Profile created successfully',
            'profile' => $profile
        ], 201);
    }
    public function show(Request $request)
{
    $profile = $request->user()->profile;

    if (!$profile) {
        return response()->json([
            'message' => 'Profile not found'
        ], 404);
    }

    return response()->json([
        'message' => 'Profile fetched successfully',
        'profile' => $profile
    ], 200);
}
   
}
