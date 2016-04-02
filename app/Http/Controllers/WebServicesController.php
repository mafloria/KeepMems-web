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
        $result['avatars'] = array("1"=>"female","2"=>"female","3"=>"female-1","4"=>"female-2");                        
                
        return json_encode($result);
    }
    
    public function get_buddies($session){ //todas las personas creadas
        $result['code']=200; 
        $result['message']="Tienes # persona en tu lista";
        $result['buddy'][1] = array("buddy_id"=>1,"gender"=>2, "buddy_nickname"=>"Amorcito", "avatar"=>"male", "compatibility"=>"50", "num_interest"=>"8", "num_memories"=>"4" );
        $result['buddy'][2] = array("buddy_id"=>2,"gender"=>1, "buddy_nickname"=>"Hermanita", "avatar"=>"femme", "compatibility"=>"70", "num_interest"=>"10", "num_memories"=>"3" );
        $result['buddy'][3] = array("buddy_id"=>3,"gender"=>2, "buddy_nickname"=>"Tini", "avatar"=>"male", "compatibility"=>"0", "num_interest"=>"0", "num_memories"=>"4" );
                
        return json_encode($result);
    }                    
    
    public function add_buddy($session){ //crea una persona importante
        
        $result['code']=201; 
        $result['message']="Persona creada.";        
        $result['new_buddy_id']=4;
        
        return json_encode($result);
    }
    
    public function get_buddy($session, $person) //recupera los datos de una sola persona
    {
        $tmp[1] = array("buddy_id"=>1,"gender"=>"Hombre", "buddy_nickname"=>"Amorcito", "avatar"=>"male", "compatibility"=>"50", "message"=>"media compatibilidad", "num_interest"=>"8", "num_memories"=>"4" );
        $tmp[2] = array("buddy_id"=>2,"gender"=>"Mujer", "buddy_nickname"=>"Hermanita", "avatar"=>"femme", "compatibility"=>"70", "message"=>"Hay compatibilidad", "num_interest"=>"10", "num_memories"=>"3" );
        $tmp[3] = array("buddy_id"=>3,"gender"=>"Hombre", "buddy_nickname"=>"Tini", "avatar"=>"male", "compatibility"=>"0", "message"=>"No existe compatibilidad", "num_interest"=>"0", "num_memories"=>"4" );
        $tmp[4] = array("buddy_id"=>4,"gender"=>"Mujer", "buddy_nickname"=>"Nata", "avatar"=>"femme", "compatibility"=>"0", "message"=>"No existe compatibilidad", "num_interest"=>"0", "num_memories"=>"0");
        
        $result['code']=200;         
        $result['buddy']= $tmp[$person];        
                               
        return json_encode($result);
    }
    
    public function get_total_buddy_memories($session, $person) //recupera las memorias que se tienen con una persona
    {                            
        $result['code']=200;         
        $result['message']="Memorias recuperadas";        
        $result['total_memories'] = 15;        

        return json_encode($result);
    }
    
    public function get_buddy_memories($session, $person) //recupera las memorias que se tienen con una persona
    {
        $result['code']=200;
        if($person<4){
            $result['message']="Memorias recuperadas";                
            $result['memory'][0] = array("memory_id"=>4,"title"=>"Cine Asqueroso", "desc"=>"Primero ella fue la que escogio la pelicula, me tocó pagar a mi todo y despues salio con el cuento que estaba enferma y nos fuismos en medio de la pelicula.", "date"=>"Marzo 14 - 2015", "feeling"=>"hate", "category"=>"Cine", "compatibility"=> array());
            $result['memory'][1] = array("memory_id"=>3,"title"=>"Picnic en Pance", "desc"=>"Picnic sorpresa cerca al rio, la comida deliciosa y muy poca gente cerca.", "date"=>"Marzo 2 2016", "feeling"=>"great", "category"=>"Salidas", "compatibility"=> array('salidas'=>100) );
            $result['memory'][2] = array("memory_id"=>2,"title"=>"Almuerzo con los suegros", "desc"=>"No se que colocar aca.", "date"=>"Diciembre 8 2015", "feeling"=>"wow", "category"=>"Familia", "compatibility"=> array('Cenas en Familia'=>50) );
            $result['memory'][3] = array("memory_id"=>1,"title"=>"Borrachera de Grado", "desc"=>"En el grado de mi cuñado, fue genial como en la universidad..", "date"=>"Noviembre 20 2015", "feeling"=>"nice", "category"=>"Familia, Celebracion", "compatibility"=> array('Celebraciones familiares'=>80) );
        }else{
            $result['message']="No tienes memorias con esta persona";                
            $result['memory'] = array();
        }                                                                            
        
        return json_encode($result);
    }
    
    public function add_memory($session){ //crea una persona importante
        
        $result['code']=201; 
        $result['message']="Memoria creada.";        
        $result['new_buddy_id']=5;
        
        return json_encode($result);
    }
}
