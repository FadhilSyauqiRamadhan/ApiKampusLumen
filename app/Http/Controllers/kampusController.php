<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use Illuminate\Http\Request;

class kampusController extends Controller
{
    public function index()
    {
        return response()->json(Kampus::all());
    }

    public function show($id)
    {
        return response()->json(Kampus::findOrFail($id));
    }

    public function store(Request $request)
    {
        $kampus = Kampus::create($request->all());
        return response()->json($kampus, 201);
    }

    public function update(Request $request, $id)
    {
        $kampus = Kampus::findOrFail($id);
        $kampus->update($request->all());
        return response()->json($kampus);
    }

    public function destroy($id)
    {
        Kampus::destroy($id);
        return response()->json(null, 204);
    }
}
