<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $categories = Category::query()->with('services')->get();
        return response()->json($categories);
    }

    public function show(Service $service)
    {
        return response()->json($service);
    }
}
