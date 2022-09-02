<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;

class UserController extends Controller
{
    public function users()
    {
        $usuarios = User::with('domicilios')->get();
        $array = $usuarios->toArray();

        return response()->json($array,Response::HTTP_OK);
    }
}
