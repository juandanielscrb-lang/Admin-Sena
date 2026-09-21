<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCenterController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $centers = TrainingCenter::query();

        if ($search) {
            $centers->where(function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                      ->orWhere('location', 'like', "%{$search}%");
            });
        }

        $centers = $centers->get();

        return view('trainingCenter.index', compact('centers'));
    }

    public function create()
    {
        return view('trainingCenter.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
        ]);

        $center = TrainingCenter::create($validated);

        if ($request->is('api/*') || $request->expectsJson()) {
            return response()->json($center, 201);
        }

        return redirect()->route('trainingCenter.list');
    }

    public function show($id)
    {
        $center = TrainingCenter::findOrFail($id);

        if (request()->is('api/*') || request()->expectsJson()) {
            return response()->json($center);
        }

        return view('trainingCenter.show', compact('center'));
    }

    public function edit(TrainingCenter $trainingCenter)
    {
        return view(
            'trainingCenter.edit',
            compact('trainingCenter')
        );
    }

    public function update(Request $request, TrainingCenter $trainingCenter)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
        ]);

        $trainingCenter->update($validated);

        if ($request->is('api/*') || $request->expectsJson()) {
            return response()->json($trainingCenter);
        }

        return redirect()->route('trainingCenter.list');
    }

    public function destroy(TrainingCenter $trainingCenter)
    {
        $trainingCenter->delete();

        if (request()->is('api/*') || request()->expectsJson()) {
            return response()->json(['message' => 'Centro de formación eliminado correctamente.']);
        }

        return redirect()->route('trainingCenter.list');
    }

    public function apiindex()
    {
        $centers = TrainingCenter::all();
        return response()->json($centers);
    }
}