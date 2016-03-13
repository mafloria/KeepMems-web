@extends('layouts.user')

@section('js')
<script src="../js/dashboard.min.js" type="text/javascript"></script>
@endsection

@section('content')

  <section class="intro-section center">       
    <p><strong>Dashboard<br /></strong></p>        
    <nav>
      <?php foreach($buddies_data->buddy as $key=>$value){ ?>
        <p>
            <a href="<?php echo WEBSERVICES; ?>person-memories/<?php echo $session_id; ?>/<?php echo $value->buddy_id; ?>">
                <img src="../images/avatars/<?php echo $value->avatar; ?>" /><?php echo $value->buddy_nickname." (".$value->compatibility." % compatibilidad)"; ?></a>
         </p>
      <?php } ?>                    
     </nav>                
                
      <div class="content-section">
        <form name="new_person_form" id="new-person-form" action="" method="POST">
        <fieldgroup>          
            <div class="fieldinput">
                <input type="text" name="person_nickname" id="person-nickname" maxlength="25" value="" placeholder="Cómo llamas a esta persona? *" data-rule-required="true" data-msg-required="Cómo le llamas a la persona que quieres agregar?." data-rule-maxlength="25" data-msg-maxlength="No puedes exceder los 15 caracteres" />
            </div>
        </fieldgroup>    
        <fieldgroup>          
            <div class="fieldinput">                            
                        <select data-rule-required="true" data-msg-required="Selecciona el género de la persona.">
                            <option value="">Género *</option>
                         <?php foreach($new_person_data['genders'] as $key=>$value){ ?>
                            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                         <?php } ?>                        
                        </select>
            </div>
        </fieldgroup>    
        <fieldgroup>          
            <div class="fieldinput">                        
                        <br/>Selecciona un Avatar para esta persona:<br/>                        
                        <?php foreach($new_person_data['avatars'] as $key=>$value){ ?>
                            <input type="radio" name="person_avatar" id="person-avatar" value="<?php echo $key; ?>" /><img src="../images/avatars/<?php echo $value; ?>" />                        
                         <?php } ?>                                      
            </div>
        </fieldgroup>    
        <div class="button-section">
              <input type="submit" name="add_person_button" id="add-person-button" value="Adicionar Persona" />                    
        </div>         
       </form>   
     </div>          
     <div id="new-person-messages"></div>
   </section>  
<script>
    var validation = "<?php echo $session_id; ?>";
</script>
            
@endsection
