<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\API\Controller;
use App\Models\Admin\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogCategoryController extends Controller
{
    public function index()
    {
        return BlogCategory::with('blog')->get();
    }

    public function show($id)
    {
        return BlogCategory::with('blog')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $blog_category = BlogCategory::create($validated);


        return response()->json($blog_category, 201);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255' // sometimes o‘rniga required qilib ko‘ring
        ]);

        $blog_category = BlogCategory::findOrFail($id);
        $blog_category->update($validated);
        return response()->json($blog_category, 200);
    }

    public function destroy(Request $request, $id)
    {
        $blog_category=BlogCategory::findOrFail($id);
        $blog_category->delete();
        return response()->json(['message' => 'Blog category deleted successfully'], 200);


    }


}
