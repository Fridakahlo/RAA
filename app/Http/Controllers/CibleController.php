<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cibles;

class CibleController extends Controller
{
    public function view_cible(){
    	$cibles = Cibles::all();

    	return view ('home', compact('cibles'));
    }
}
