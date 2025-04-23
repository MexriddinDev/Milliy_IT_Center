<?php

namespace App\Http\Controllers\API;

use App\Models\New_category;
use Illuminate\Http\Request;

class NewCategoryController extends Controller
{
    public function index()
    {
        return New_category::with('nev')->get();
    }

    // Bitta kategoriya
    public function show($id)
    {
        return New_category::with('nev')->findOrFail($id);
    }





}
