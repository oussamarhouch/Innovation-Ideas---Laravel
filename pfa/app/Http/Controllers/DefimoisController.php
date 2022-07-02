<?php

namespace App\Http\Controllers;

use App\Ecrireidee;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use DB;

class DefimoisController extends Controller
{
    public function defimois()
    {
      $data = DB::table('defi')->get();
      return view('connected.defi_mois',compact('data'));
    }
    public function create(Request $request){
      $compte = auth::user();
      $idee= array(
        'titre' => $request['titre'],
        'idee' => $request['idee'],
        'username' => $compte->username,
        'defi' => 'defi',
  );
  $response = DB::table('idees_ecrites')->insert($idee);
  return back()->with('success', "Account successfully registered.");
    }
}
