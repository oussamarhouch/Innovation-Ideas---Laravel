<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class VoirdefiController extends Controller
{
    public function voirdefi()
    {
      $user = auth::user();
      $data = DB::table('defi')->get();
      $idee = DB::table('idees_ecrites')->where('defi','=','defi')->orderByDesc('rating')->get();

      return view('connected.voir_defi')->with('data',$data)->with('idee',$idee);
    }
}
