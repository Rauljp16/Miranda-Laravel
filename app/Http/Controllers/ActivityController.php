<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{

    public function index()
    {
        $activities = Activity::all();
        
        return view("activities.index", ["activities" => $activities, "user_id" => Auth::id()]);
        //return response()->json(["activities" => $activities]);
        
    }
 
    public function create()
    {
        return view('activities.create');
    }

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
    
        return view("activities.show", ["activity" => $activity]);
        //return response()->json($activity, 201);
    }
    
    public function show(Activity $activity)
    {
        return view("activities.show", compact("activity"));
        //return response()->json(['activity' => $activity]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        
        $activity = Activity::findOrFail($id);
        
        $activity->update($request->all());

        return response()->json(['activity' => $activity]);
    }

    public function destroy(string $id)
    {
        
        $activity = Activity::destroy($id);


        return response()->json(['message' => 'Activity deleted successfully']);
    }
}
