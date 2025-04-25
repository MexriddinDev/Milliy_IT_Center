<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\API\Controller;
use App\Models\Admin\New_category;
use Illuminate\Http\Request;

class NewCategoryController extends Controller
{

    public function index()
    {
        return New_category::with('nev')->get();
    }


    public function show($id)
    {
        return New_category::with('nev')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $new_category = New_category::create($validated);

        return response()->json($new_category, 201);
    }
    public function update(Request $request, New_category $new_category)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255'
        ]);

        $new_category->update($validated);

        return response()->json($new_category, 200);
    }
    public function destroy(New_category $new_category)
    {
        $new_category->delete();

        return response()->json(['message' => 'Blog deleted successfully'], 200);
    }

}
