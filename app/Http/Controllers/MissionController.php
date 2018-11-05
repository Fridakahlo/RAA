<?php

namespace App\Http\Controllers;

// use DB;
use App\Agents;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    
    public function mission_details()
    {
    	$mission=DB::table('missions')->first();

    	dd($mission);
    }

    // public function index(){
    // 	$agents = Agents::all();

    // 	return view ('home', compact('agents'));
    }

}
