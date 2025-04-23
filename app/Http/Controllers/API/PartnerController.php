<?php

namespace App\Http\Controllers\API;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        return Partner::all();
    }

    public function show($id)
    {
        return Partner::findOrFail($id);
    }

}
