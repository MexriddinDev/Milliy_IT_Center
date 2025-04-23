<?php

namespace App\Http\Controllers\API;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return Blog::with('category')->get();
    }
    public function show($id){
        return Blog::with('category')->findOrFail($id);
    }






}
