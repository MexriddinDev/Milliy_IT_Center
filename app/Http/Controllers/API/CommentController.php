<?php

namespace App\Http\Controllers\API;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        return Comment::all();
    }

    public function show($id)
    {
        return Comment::findOrFail($id);
    }


}
