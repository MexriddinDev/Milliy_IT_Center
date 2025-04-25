<?php

namespace App\Http\Controllers\API\Admin;

use App\Models\Admin\Blog_question;
use Illuminate\Http\Request;

class BlogQuestionController
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return Blog_question::with('blog')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id){
        return Blog_question::with('blog')->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogQuestion $blogQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogQuestion $blogQuestion)
    {
        //
    }
}
