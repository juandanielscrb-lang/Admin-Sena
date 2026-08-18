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
        TrainingCenter::create($request->all());

        return redirect()->route('trainingCenter.list');
    }

    public function show($id)
    {
        $center = TrainingCenter::find($id);

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
        $trainingCenter->update($request->all());

        return redirect()->route('trainingCenter.list');
    }

    public function destroy(TrainingCenter $trainingCenter)
    {
        $trainingCenter->delete();

        return redirect()->route('trainingCenter.list');
    }
}