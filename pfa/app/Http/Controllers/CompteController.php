<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompteController extends Controller
{
    public function compte()
    {
      $compte = auth::user();

      return view('connected.compte', ['compte' => $compte]);
    }
}
