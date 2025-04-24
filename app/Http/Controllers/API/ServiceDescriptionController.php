<?php

namespace App\Http\Controllers\API;

use App\Models\Service_description;
use Illuminate\Http\Request;

class ServiceDescriptionController extends Controller
{

    public function index()
    {
        $descriptions = Service_description::with('service')->get();
        return response()->json($descriptions);
    }

    public function show($id)
    {
        $description = Service_description::with('service')->findOrFail($id);
        return response()->json($description);
    }


}
