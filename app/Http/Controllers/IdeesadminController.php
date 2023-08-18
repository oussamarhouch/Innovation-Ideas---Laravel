<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IdeesadminController extends Controller
{
    public function ideesadmin()
    {
      $idee = DB::table('idees_ecrites')->orderByDesc('rating')->get();
      return view('connected.idees_admin', ['idee' => $idee]);
    }
}
