<?php

namespace App\Http\Controllers\API;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index(){
        return Employer::all();
    }

    public function show($id)
    {
        return Employer::findOrFail($id);

    }
}
