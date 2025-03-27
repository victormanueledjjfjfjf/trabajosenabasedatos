<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barrack;

class BarrackController extends Controller
{
    public function index()
    {
        return response()->json(Barrack::all());
    }

    public function store(Request $request)
    {
        $barrack = Barrack::create($request->all());
        return response()->json($barrack, 201);
    }

    public function show(Barrack $barrack)
    {
        return response()->json($barrack);
    }

    public function update(Request $request, Barrack $barrack)
    {
        $barrack->update($request->all());
        return response()->json($barrack);
    }

    public function destroy(Barrack $barrack)
    {
        $barrack->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}

