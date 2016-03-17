<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserInterfaceController extends Controller
{              
     /**
     * Show the user dashboard.
     *
     * @param  int  $session
     * @return Response
     */
    public function user_dashboard($session)
    {        
        $data['session_id'] = $session;   
                            
       // $data['new_person_data'] = (array)json_decode(file_get_contents('localhost:8000/webservices/get-new-person-setup'));         
        //$data['buddies_data'] = json_decode(file_get_contents('localhost:8000/webservices/get-buddies/'.$session));
        
        $cliente = new WebServicesController;                
        $data['new_person_data'] = (array)json_decode($cliente->get_new_person_setup());
        $data['buddies_data'] = json_decode($cliente->get_buddies($session));

        return view('user_home', $data); //user.dashboard                
    }
    
    /**
     * Show the user dashboard.
     *
     * @param  int  $session
     * @return Response
     */
    public function person_memories($session, $person)    
    {         
        $data['session_id'] = $session;
                            
       // $data['new_person_data'] = (array)json_decode(file_get_contents('localhost:8000/webservices/get-new-person-setup'));         
        //$data['buddies_data'] = json_decode(file_get_contents('localhost:8000/webservices/get-buddies/'.$session));
        
        $cliente = new WebServicesController;                
        $data['buddy_data'] = (array)json_decode($cliente->get_buddy($session, $person));
        $data['buddy_total_memories'] = json_decode($cliente->get_total_buddy_memories($session, $person))->total_memories;        
        $data['buddy_memories'] = (array)json_decode($cliente->get_buddy_memories($session, $person));        

        return view('person_memories', $data);
    }
}
