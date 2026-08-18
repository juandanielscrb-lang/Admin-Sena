<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $areas = Area::query();

        if ($search) {
            $areas->where('name', 'like', "%{$search}%");
        }

        $areas = $areas->get();

        return view('area.index', compact('areas'));
    }

    public function create()
    {
        return view('area.create');
    }

    public function store(Request $request)
    {
        $area = new Area();

        $area->name = $request->name;

        $area->save();

        return redirect()->route('area.list');
    }

    public function show($id)
    {
        $area = Area::find($id);

        return view('area.show', compact('area'));
    }

    public function edit(Area $area)
    {
        return view('area.edit', compact('area'));
    }

    public function update(Request $request, Area $area)
    {
        $area->name = $request->name;

        $area->save();

        return redirect()->route('area.list');
    }

    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()->route('area.list');
    }
}