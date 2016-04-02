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
         <div class="section-full-border">
            <div class="content-section">
              <a class="display-section" href="<?php echo APPURL; ?>person-memories/<?php echo $session_id; ?>/<?php echo $value->buddy_id; ?>">
                <div class="display-section-avatar">  
                  <svg class="avatar-<?php echo $value->avatar; ?>"><use <?php echo 'xlink:href="#avatar-'.$value->avatar.'"'; ?> /></svg>  
                </div>
                <div class="display-section-info">
                    <div class="display-section-name">
                      <?php echo $value->buddy_nickname; ?>
                    </div>
                    <div class="display-section-resume">
                      <span><?php echo $value->num_memories; ?> Recuerdos</span>
                      <span><?php echo $value->num_interest; ?> Inter&eacute;ses</span>
                    </div>
                </div>
                <?php if($value->compatibility){ ?>
                <div class="compatibility-item-result comp-positive" href="javascript:void(0);">
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
    <a class="add-btn" id="link-add-new-person" href="javascript:void(0);">
      <svg class="icon-plus"><use xlink:href="#agregar" /></svg>
      <p>Agregar una persona</p>
    </a>
  </section>
   
   <!--PAGES CREATE PERSON-->
  <section class="pages-section create-person-page" id="new-person-section" style="display: none">
    <div class="content-section">      
      <section class="action-box-wrap">        
        <div class="action-box">           
              <div class="action-box-title">
                Nueva Persona
              </div> 
              <div class="action-box-info">
                <form name="new_person_form" id="new-person-form" action="" method="POST">              
                  <fieldgroup>
                    <div class="fieldinput">                  
                        <select name="person_gender" id="new-person-gender" data-rule-required="true" data-msg-required="Selecciona el género de la persona.">
                             <option value="">Género *</option>
                          <?php foreach($new_person_data['genders'] as $key=>$value){ ?>
                                <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                          <?php } ?>                        
                         </select>
                    </div>
                    <div class="fieldinput">                  
                      <input type="text" name="person_nickname" id="new-person-nickname" maxlength="30" value="" placeholder="Cómo deseas llamar a esta persona? *" data-rule-required="true" data-msg-required="Cómo le llamas a la persona que quieres agregar?." data-rule-maxlength="30" data-msg-maxlength="No puedes exceder los 30 caracteres" />
                      <span class="character-counter" id="new-person-nickname-charcounter">30 caracteres</span>
                    </div>
                  </fieldgroup>
                  <input type="submit" name="add_person_button" id="add-person-button" value="Crear" />  
                </form>
              </div>                         
        </div>  
      </section>

    </div>
  </section>     

@endsection
