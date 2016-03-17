@extends('layouts.user')

@section('js')
<script src="<?php echo CC_JS_IMG; ?>js/dashboard.min.js" type="text/javascript"></script>
@endsection

@section('content')
<!--PAGES MY LIST-->
  <section class="pages-section my-list">
    <div class="section-full-border title-main-section">
      <div class="content-section">
        <h2>Mi Lista</h2>
      </div>
    </div>
    <section class="people-list">            
    <?php foreach($buddies_data->buddy as $key=>$value){ ?>
         <?php /*
         <p>
            <a href="<?php echo WEBSERVICES; ?>person-memories/<?php echo $session_id; ?>/<?php echo $value->buddy_id; ?>">
                <img src="../images/avatars/<?php echo $value->avatar; ?>" /><?php echo $value->buddy_nickname." (".$value->compatibility." % compatibilidad)"; ?></a>
         </p> */?>
         <div class="section-full-border">
            <div class="content-section">
              <a class="display-section" href="<?php echo WEBSERVICES; ?>person-memories/<?php echo $session_id; ?>/<?php echo $value->buddy_id; ?>">
                <div class="display-section-avatar">  
                  <svg class="avatar-<?php echo $value->avatar; ?>"><use xlink:href="#avatar-<?php echo $value->avatar; ?>" /></svg>  
                </div>
                <div class="display-section-info">
                    <div class="display-section-name">
                      <?php echo $value->buddy_nickname; ?>
                    </div>
                    <div class="display-section-resume">
                      <span># Recuerdos</span>
                      <span># Inter&eacute;ses</span>
                    </div>
                </div>
                <?php if($value->compatibility){ ?>
                <div class="compatibility-item-result comp-positive" href="">
                  <svg class="comp-result-icon"><use xlink:href="#compatible" /></svg> 
                  <p><?php echo $value->compatibility; ?>%</p> 
                </div>
                <?php }else{ ?>
                <div class="compatibility-item-result comp-non" href="javascript:void(0);">
                  <span>Ingresa algunos inter&eacute;ses para ver<br /> la compatibilidad con esta persona</span> 
                </div>
                <?php } ?>
              </a>
            </div>
          </div>
         
         
    <?php } ?>  
    </section>
    <a class="add-btn" href="#">
      <svg class="icon-plus"><use xlink:href="#agregar" /></svg>
      <p>Agregar una persona</p>
    </a>
  </section>
   
   <!--PAGES CREATE PERSON-->
  <section class="pages-section create-person-page">
    <div class="content-section">      
      <section class="action-box-wrap">        
        <div class="action-box">
          <form name="new_person_form" id="new-person-form" action="" method="POST">  
              <div class="action-box-title">
                Nueva Persona
              </div> 
              <div class="action-box-info">            
                  <fieldgroup>
                    <div class="fieldinput">                  
                        <select data-rule-required="true" data-msg-required="Selecciona el género de la persona.">
                             <option value="">Género *</option>
                          <?php foreach($new_person_data['genders'] as $key=>$value){ ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                          <?php } ?>                        
                         </select>
                    </div>
                    <div class="fieldinput">                  
                      <input type="text" name="person_nickname" id="person-nickname" maxlength="30" value="" placeholder="Cómo deseas llamar a esta persona? *" data-rule-required="true" data-msg-required="Cómo le llamas a la persona que quieres agregar?." data-rule-maxlength="30" data-msg-maxlength="No puedes exceder los 30 caracteres" />
                      <span class="character-counter">30 caract&eacute;res</span>
                    </div>
                  </fieldgroup>
                
              </div> 
              <div class="action-box-btn">
                 <input type="submit" name="add_person_button" id="add-person-button" value="Crear" />
                <a href="">Crear</a>
              </div>
          </form> 
        </div>  
      </section>

    </div>
  </section>    
   
   
<script>
    var validation = "<?php echo $session_id; ?>";
</script>

@endsection

<!--

  <section class="intro-section center">       
    <p><strong>Dashboard<br /></strong></p>        
                
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
             
-->