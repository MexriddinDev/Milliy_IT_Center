<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;

class ServiceController extends Controller
{
    public function index()
    {
        $categories = Category::query()->with('services')->get();
        return response()->json($categories);
    }
}
