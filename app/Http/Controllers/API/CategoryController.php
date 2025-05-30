<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController
{
    public function index(){
        return Category::with('services')->get();
    }

    public function show($id)
    {
        return Category::findOrFail($id);
    }



}
