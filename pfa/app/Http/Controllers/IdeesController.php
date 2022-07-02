<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IdeesController extends Controller
{
  public function upVote(Request $request, $id)
  {
      $data = DB::table('idees_ecrites')->find($id)->increment('rating', 1);
      return redirect()->back();
  }
    public function create()
    {
        $data = DB::table('idees_ecrites')->orderByDesc('rating')->get();
        $idee = DB::table('idees_ecrites')->where('id','=',$data->id);
        $idee->rating++;
        $idee->update();
        return back()->with('success', "Account successfully registered.");
    }
    public function insert()
    {
      $idee = DB::table('idees_ecrites')->orderByDesc('rating')->get();
      return view('connected.idees', ['idee' => $idee]);
    }
}
