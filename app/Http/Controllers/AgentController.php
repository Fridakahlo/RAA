<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agents;

class AgentController extends Controller
{
    public function view_agent(){
    	$agents = Agents::all();

    	return view ('home', compact('agents'));
    }
}
