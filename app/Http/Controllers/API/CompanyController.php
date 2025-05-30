<?php

namespace App\Http\Controllers\API;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::with('comments')->get();
    }

    public function show($id)
    {
        return Company::findOrFail($id);
    }

}
