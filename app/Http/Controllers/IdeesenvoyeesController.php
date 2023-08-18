<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IdeesenvoyeesController extends Controller
{
    public function ideesenvoyees()
    {
      $user = auth::user();
      $idee = DB::table('idees_ecrites')->where('username','=',$user->username)->orderByDesc('rating')->get();
      return view('connected.idees_envoyees', ['idee' => $idee]);
    }
}
