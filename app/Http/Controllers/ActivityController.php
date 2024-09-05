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

        $activity = Activity::create([
            'type' => $request->type,
            'description' => $request->description,
            'date' => $request->datetime,
            'user_id' => Auth::id(), 
        ]);

        return response()->json(['activity' => $activity], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $activity = Activity::find($id);

       
        if (!$activity) {
            return response()->json(['message' => 'Activity not found'], 404);
        }

        return response()->json(['activity' => $activity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $activity = Activity::find($id);

        
        if (!$activity) {
            return response()->json(['message' => 'Activity not found'], 404);
        }

        
        $activity->update($request->all());

        return response()->json(['activity' => $activity]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $activity = Activity::find($id);

        
        if (!$activity) {
            return response()->json(['message' => 'Activity not found'], 404);
        }

        $activity->delete();

        return response()->json(['message' => 'Activity deleted successfully']);
    }
}
