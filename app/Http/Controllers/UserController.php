<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function index() {
        $values = User::with('userDomicilio')->get();

        return response()->json([
            "data" => $values
        ]);
    }
}
