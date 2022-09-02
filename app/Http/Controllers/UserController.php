<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function users()
    {
        $usuarios = User::with('domicilios')->get()->each(function ($user)
        {
            $edad = Carbon::parse($user->fecha_nacimiento)->age;
            $user->edad = $edad;
        });
        $array = $usuarios->toArray();

        return response()->json($array,Response::HTTP_OK);
    }
}
