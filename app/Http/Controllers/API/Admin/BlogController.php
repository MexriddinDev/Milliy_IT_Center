<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\API\Controller;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Blog::with('category')->get(), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'blog_category_id' => 'required|exists:blog_categories,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'recorded_by' => 'required|string',
        ]);

        $blog = Blog::create($validated);

        return response()->json($blog, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::with('category')->findOrFail($id);
        return response()->json($blog, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'blog_category_id' => 'sometimes|exists:blogs,id',
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'image' => 'nullable|string',
            'recorded_by' => 'sometimes|string',
        ]);

        $blog->update($validated);


        return response()->json($blog, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return response()->json(['message' => 'Blog deleted successfully'], 200);
    }
}
