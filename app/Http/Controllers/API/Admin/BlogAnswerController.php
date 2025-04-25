<?php

namespace App\Http\Controllers\API\Admin;


use App\Http\Controllers\API\Controller;
use App\Models\Admin\Blog_answer;

class BlogAnswerController extends Controller
{
    public function index()
    {
        return Blog_answer::with('blog')->get();
    }

    public function show($id)
    {
        return Blog_answer::with('blog')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

        ]);

        $blog = Blog_answer::create($validated);

        return response()->json($blog, 201);
    }

}
