<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::all()->sortByDesc('created_at');
    }

    public function show(Company $company): \Illuminate\Http\JsonResponse
    {
        return response()->json($company);
    }
}
