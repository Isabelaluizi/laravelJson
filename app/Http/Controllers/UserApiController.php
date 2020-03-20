<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserApiController extends Controller
{
    function getAllUsers() {
        $usersCollection=\App\User::where('id', '<>', Auth::user()->id)->get();
        $userJson = $usersCollection->toJson(JSON_PRETTY_PRINT);
        return response()->json($userJson);
    }
}
