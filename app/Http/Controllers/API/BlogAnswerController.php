<?php

namespace App\Http\Controllers\API;

use App\Models\Blog_answer;
use App\Models\Blog_category;

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

}
