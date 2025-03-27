<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Corp;

class CorpController extends Controller
{
    public function index()
    {
        return response()->json(Corp::all());
    }

    public function store(Request $request)
    {
        $corp = Corp::create($request->all());
        return response()->json($corp, 201);
    }

    public function show(Corp $corp)
    {
        return response()->json($corp);
    }

    public function update(Request $request, Corp $corp)
    {
        $corp->update($request->all());
        return response()->json($corp);
    }

    public function destroy(Corp $corp)
    {
        $corp->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}

