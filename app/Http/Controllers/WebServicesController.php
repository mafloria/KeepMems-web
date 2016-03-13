<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WebServicesController extends Controller
{
/********************** VISITOR RESPONSES */
    public function create_account(){ 
        $exist_email = "mafloria@hotmail.com";
        if($_POST['user_email']==$exist_email){
            $result['code']=202; 
            $result['message']="La cuenta de correo ya existe, ingresa a tu cuenta.";
        }else{
            $result['code']=201; 
            $result['message']="Tu Cuenta fue creada, por favor revisa tu email y valida tu cuenta.";    
        }
        
        return json_encode($result);
    }
    
    public function validate_token(){
        $test_email = "mafloria@hotmail.com";
        $test_pswd = "maga";
        $session_id = md5(date("YmdHis"));
        
        if($_POST['user_email']==$test_email && $_POST['user_pswd']==$test_pswd){
            $result['code']=200; 
            $result['message']="Bienvenido";
            $result['session_id'] = $session_id;
        }else{
            $result['code']=400; 
            $result['message']="Verifica los datos que ingresaste. Email y/o contraseña inválido";    
        }
        
        
        return json_encode($result);
    }
    
/********************** USER RESPONSES */    
    
    public function get_new_person_setup() //setup para crear una persona
    {
        $result['code']=200; 
        $result['message']="Data to create new person";
        $result['genders'] = array("1"=>"Mujer","2"=>"Hombre");
        $result['avatars'] = array("1"=>"avatar-1.jpg","2"=>"avatar-2.jpg","3"=>"avatar-3.jpg","4"=>"avatar-4.jpg");                        
                
        return json_encode($result);
    }
    
    public function get_buddies($session){ //todas las personas creadas
        $result['code']=200; 
        $result['message']="Tienes # persona en tu lista";
        $result['buddy'][1] = array("buddy_id"=>1,"gender"=>2, "buddy_nickname"=>"Amorcito", "avatar"=>"avatar-2.jpg", "compatibility"=>"50" );
        $result['buddy'][2] = array("buddy_id"=>2,"gender"=>1, "buddy_nickname"=>"Hermanita", "avatar"=>"avatar-3.jpg", "compatibility"=>"70" );
                
        return json_encode($result);
    }                    
    
    public function add_buddy($session){ //crea una persona importante
        
        $result['code']=201; 
        $result['message']="Persona creada.";        
        $result['buddy_id']=1;
        
        return json_encode($result);
    }
    
    public function get_buddy($session, $person) //recupera los datos de una sola persona
    {
        $tmp[1] = array("buddy_id"=>1,"gender"=>"Mujer", "buddy_nickname"=>"Amorcito", "avatar"=>"avatar-2.jpg", "compatibility"=>"50", "message"=>"media compatibilidad" );
        $tmp[2] = array("buddy_id"=>2,"gender"=>"Mujer", "buddy_nickname"=>"Hermanita", "avatar"=>"avatar-3.jpg", "compatibility"=>"70", "message"=>"Hay compatibilidad" );
                    
        $result['code']=200;         
        $result['buddy']= $tmp[$person];        
                               
        return json_encode($result);
    }
}
