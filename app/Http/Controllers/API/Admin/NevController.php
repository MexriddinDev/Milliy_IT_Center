<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\API\Controller;
use App\Models\Admin\Nev;
use Illuminate\Http\Request;

class NevController extends Controller
{

    public function index()
    {
        return Nev::with('new_category')->get();
    }

    // Bitta yangilikni chiqarish
    public function show($id)
    {
        return Nev::with('new_category')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'new_category_id'=> 'required|exists:new_categories,id',
            'title'=>'required|string|max:255',
            'description'=>'required|string',
            'image'=>'required|string',

        ]);

        $nev = Nev::create($validated);

        return response()->json($nev, 201);
    }

    public function update(Request $request, Nev $nev)
    {
        $validated = $request->validate([
            'new_category_id'=> 'sometimes|exists:new_categories,id',
            'title'=>'sometimes|string|max:255',
            'description'=>'sometimes|string',
            'image'=>'nullable|string',

        ]);

        $nev->update($validated);

        return response()->json($nev, 200);
    }

    public function destroy(Nev $nev)
    {
        $nev->delete();

        return response()->json(['message' => 'Blog deleted successfully'], 200);
    }


}
