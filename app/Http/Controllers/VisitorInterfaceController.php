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
        $data['validate_email'] = 1;
        $data['first_display_login'] = 1;
        $data['message_to_user'] = "";
        if(isset($confirm) && !empty($confirm)){            
            $cliente = new WebServicesController;                
            $email_verification = (array)json_decode($cliente->confirm_validation_email($confirm));                        
                        
            $data['first_display_login'] = 0;            
            if($email_verification['code']==200){ //email validation ok                
                $data['validate_email'] = 0;                    
            }else{
                $data['validate_email'] = 1;                               
            }
            $data['message_to_user'] = $email_verification['message'];
        }
        
        return view('visitor', $data); //user.dashboard                
    }
        
}
