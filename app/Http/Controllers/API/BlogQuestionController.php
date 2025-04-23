<?php

namespace App\Http\Controllers\API;

use App\Models\Blog_question;

class BlogQuestionController extends Controller
{
    public function index(){
        return Blog_question::with('blog')->get();
    }

    public function show($id){
        return Blog_question::with('blog')->findOrFail($id);
    }
}
