<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    // LISTAR Y BUSCAR
    public function index(Request $request)
    {
        $search = $request->search;

        $computers = Computer::query();

        if ($search) {
            $computers->where(function ($query) use ($search) {
                $query->where('number', 'like', "%{$search}%")
                      ->orWhere('brand', 'like', "%{$search}%");
            });
        }

        $computers = $computers->get();

        return view('computer.index', compact('computers'));
    }

    public function create()
    {
        return view('computer.create');
    }

    public function store(Request $request)
    {
        $computer = new Computer();

        $computer->number = $request->number;
        $computer->brand = $request->brand;

        $computer->save();

        return redirect()->route('computer.list');
    }

    public function show($id)
    {
        $computer = Computer::find($id);

        return view('computer.show', compact('computer'));
    }

    public function edit(Computer $computer)
    {
        return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer)
    {
        $computer->number = $request->number;
        $computer->brand = $request->brand;

        $computer->save();

        return redirect()->route('computer.list');
    }

    public function destroy(Computer $computer)
    {
        $computer->delete();

        return redirect()->route('computer.list');
    }
}