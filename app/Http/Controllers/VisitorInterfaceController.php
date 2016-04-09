<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VisitorInterfaceController extends Controller
{              
     /**
     * Show the user dashboard.
     *
     * @param  int  $session
     * @return Response
     */
    public function index($confirm="")
    {        
        $data = array();        
        if(isset($confirm) && !empty($_GET['confirm']){
                
        }
        
        return view('visitor', $data); //user.dashboard                
    }
        
}
