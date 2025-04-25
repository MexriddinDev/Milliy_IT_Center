<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\API\Controller;
use App\Models\Admin\Blog_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogCategoryController extends Controller
{
    public function index()
    {
        return Blog_category::with('blog')->get();
    }

    public function show($id)
    {
        return Blog_category::with('blog')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $blog_category = Blog_category::create($validated);

        return response()->json($blog_category, 201);
    }

    public function update(Request $request, Blog_category $blog_category)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255'
        ]);

        $blog_category->update($validated);


        return response()->json($blog_category, 200);
    }

    public function destroy(Blog_category $blog_category)
    {

        dd($blog_category->delete());

        return response()->json(['message' => 'Blog deleted successfully'], 200);
    }
}
