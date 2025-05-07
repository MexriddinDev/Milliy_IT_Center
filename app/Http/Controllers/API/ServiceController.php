<?php

namespace App\Http\Controllers\API;

use App\Models\Category;
use App\Models\Service;

use Illuminate\Http\Request;
class ServiceController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $categories = Category::query()->with('services')->get();
        return response()->json($categories, 200);
    }

    public function show($id)
    {
        return Service::findOrFail($id);
    }


}
