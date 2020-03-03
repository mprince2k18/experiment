<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    function index()
    {
      $users = User::all();
      return response()->json($users);
    }
    //END
}
