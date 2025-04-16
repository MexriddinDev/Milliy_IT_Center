<?php

namespace App\Http\Controllers\API;

use App\Models\Company;

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
