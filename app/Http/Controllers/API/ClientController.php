<?php

namespace App\Http\Controllers\API;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $users = Client::all();
        return response()->json($users);
    }
    public function store(Request $request)
    {
        $validator = $request->validated();
        $client = Client::query()->create($validator);
        return response()->json(['message' => 'Client created', 'client' => $client]);
    }
}
