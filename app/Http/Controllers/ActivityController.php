<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Activity::all();
        return response()->json(["activities" => $activities]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
        'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
        'user_id' => 'required|exists:users,id',
        'date' => 'required|date',
        'paid' => 'boolean',
        'notes' => 'nullable|string',
        'satisfaction' => 'nullable|integer|min:1|max:5',
        ]);
    
        
        $activity = Activity::create($validatedData);
    
        
        return response()->json($activity, 201);
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        
        return response()->json(['activity' => $activity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $activity = Activity::findOrFail($id);
        
        $activity->update($request->all());

        return response()->json(['activity' => $activity]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $activity = Activity::destroy($id);


        return response()->json(['message' => 'Activity deleted successfully']);
    }
}
