<?php

namespace App\Http\Controllers\API;

use App\Models\Blog_category;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index(){
        return Blog_category::with('blog')->get();
    }

    public function show($id){
        return Blog_category::with('blog')->findOrFail($id);
    }

}
