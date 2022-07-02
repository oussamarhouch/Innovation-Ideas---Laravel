<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposController extends Controller
{
    public function propos(){
        return view('guest.propos');
    }
}
