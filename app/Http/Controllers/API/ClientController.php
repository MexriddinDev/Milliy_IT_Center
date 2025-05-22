<?php

namespace App\Http\Controllers\API;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }

    public function show($id)
    {
        return Client::findOrFail($id);


    }

    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required|string|max:255',
            'phone'=>'required|string|max:255',
            'company_name'=>'required|string|max:255',
            'type_service'=>'required|string|max:255',
            'message'=>'required|string|max:255',

        ]);
        $client = Client::create($validated);
        return response()->json($client, 201);
    }




}
