<?php

namespace App\Http\Controllers\API;

use App\Models\Nev;
use Illuminate\Http\Request;


class NevController extends Controller
{
    public function index()
    {
        return Nev::with('new_category')->get();
    }

    // Bitta yangilikni chiqarish
    public function show($id)
    {
        return Nev::with('new_category')->findOrFail($id);
    }



}
