<?php
namespace App\Http\Controllers;
use App\Ecrireidee;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use DB;

class EcriredefiController extends Controller
{

    public function insert(){
        return view('connected.ecrire_defi');
    }
    public function create(Request $request){
      $compte = auth::user();
      $idee= array(
        'defi' => $request['defi'],
  );
  $siu = DB::table('defi')->delete();
  $variable = DB::update('update idees_ecrites set defi = ? where defi = ?',['simple', 'defi']);
  $response = DB::table('defi')->insert($idee);
  return back()->with('success', "Account successfully registered.");
    }
}
