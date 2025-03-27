<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soldier;

class SoldierController extends Controller
{
    public function index()
    {
        return response()->json(Soldier::all());
    }

    public function store(Request $request)
    {
        $soldier = Soldier::create($request->all());
        return response()->json($soldier, 201);
    }

    public function show(Soldier $soldier)
    {
        return response()->json($soldier);
    }

    public function update(Request $request, Soldier $soldier)
    {
        $soldier->update($request->all());
        return response()->json($soldier);
    }

    public function destroy(Soldier $soldier)
    {
        $soldier->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}

