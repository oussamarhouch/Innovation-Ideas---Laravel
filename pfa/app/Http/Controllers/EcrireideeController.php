<?php
namespace App\Http\Controllers;
use App\Ecrireidee;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use DB;

class EcrireideeController extends Controller
{

    public function insert(){
        return view('connected.ecrire_idee');
    }
    public function create(Request $request){
      $compte = auth::user();
      $idee= array(
        'titre' => $request['titre'],
        'idee' => $request['idee'],
        'username' => $compte->username,
        'defi' => 'simple',
  );
  $response = DB::table('idees_ecrites')->insert($idee);
  return back()->with('success', "Account successfully registered.");
    }
}
