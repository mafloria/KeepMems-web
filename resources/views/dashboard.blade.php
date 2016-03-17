@extends('layouts.user')

@section('js')
<script src="<?php echo CC_JS_IMG; ?>js/dashboard.min.js" type="text/javascript"></script>
@endsection

@section('content')

<!--
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
   -->
   
   
   
   <!--PAGES MY LIST-->
  <section class="pages-section my-list">
    <div class="section-full-border title-main-section">
      <div class="content-section">
        <h2>Mi Lista</h2>
      </div>
    </div>
    <section class="people-list">            
    <?php foreach($buddies_data->buddy as $key=>$value){ ?>
         <p>
            <a href="<?php echo WEBSERVICES; ?>person-memories/<?php echo $session_id; ?>/<?php echo $value->buddy_id; ?>">
                <img src="../images/avatars/<?php echo $value->avatar; ?>" /><?php echo $value->buddy_nickname." (".$value->compatibility." % compatibilidad)"; ?></a>
         </p>
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
                <div class="compatibility-item-result comp-positive" href="">
                  <svg class="comp-result-icon"><use xlink:href="#compatible" /></svg> 
                  <p><?php echo $value->compatibility; ?>%</p> 
                </div>
              </a>
            </div>
          </div>
         
         
    <?php } ?>  
      
      <div class="section-full-border">
        <div class="content-section">
          <a class="display-section" href="">
            <div class="display-section-avatar">  
              <svg class="avatar-femme" style="display:none;"><use xlink:href="#avatar-femenino" /></svg>  
              <svg class="avatar-male"><use xlink:href="#avatar-masculino" /></svg> 
            </div>
            <div class="display-section-info">
                <div class="display-section-name">
                  Nombre de persona
                </div>
                <div class="display-section-resume">
                  <span># Recuerdos</span>
                  <span># Inter&eacute;ses</span>
                </div>
            </div>
            <div class="compatibility-item-result comp-positive" href="">
              <svg class="comp-result-icon"><use xlink:href="#compatible" /></svg> 
              <p>100%</p> 
            </div>
          </a>
        </div>
      </div>
      <div class="section-full-border">
        <div class="content-section">
          <a class="display-section" href="">
            <div class="display-section-avatar">  
              <svg class="avatar-femme"><use xlink:href="#avatar-femenino" /></svg>  
              <svg class="avatar-male" style="display:none;"><use xlink:href="#avatar-masculino" /></svg> 
            </div>
            <div class="display-section-info">
                <div class="display-section-name">
                  Nombre de persona
                </div>
                <div class="display-section-resume">
                  <span># Recuerdos</span>
                  <span># Inter&eacute;ses</span>
                </div>
            </div>
            <div class="compatibility-item-result comp-negative" href="">
              <svg class="comp-result-icon"><use xlink:href="#incompatible" /></svg> 
              <p>100%</p> 
            </div>
          </a>
        </div>
      </div>
      <div class="section-full-border">
        <div class="content-section">
          <a class="display-section" href="">
            <div class="display-section-avatar">  
              <svg class="avatar-femme"><use xlink:href="#avatar-femenino" /></svg>  
              <svg class="avatar-male" style="display:none;"><use xlink:href="#avatar-masculino" /></svg> 
            </div>
            <div class="display-section-info">
                <div class="display-section-name">
                  Nombre de persona
                </div>
                <div class="display-section-resume">
                  <span># Recuerdos</span>
                  <span># Inter&eacute;ses</span>
                </div>
            </div>
            <div class="compatibility-item-result comp-non" href="">
              <span>Ingresa algunos inter&eacute;ses para ver<br /> la compatibilidad con esta persona</span> 
            </div>
          </a>
        </div>
      </div>
    </section>
    <a class="add-btn" href="#">
      <svg class="icon-plus"><use xlink:href="#agregar" /></svg>
      <p>Agregar una persona</p>
    </a>
  </section>
   
   <!--PAGES CREATE PERSON-->
  <section class="pages-section create-person-page">
    <div class="content-section">
      <a class="add-btn" href="#">
        <svg class="icon-plus"><use xlink:href="#agregar" /></svg>
        <p>Agregar una persona</p>
      </a>

      <section class="action-box-wrap">
        <div class="action-box">
          <div class="action-box-title">
            Nueva Persona
          </div> 
          <div class="action-box-info">
            <form>
              <fieldgroup>
                <div class="fieldinput">
                        <select name="Escoge un sexo:">
                            <option>Masculino</option>
                      <option>Femenino</option>
                  </select>
                </div>
                <div class="fieldinput">
                  <input name="" type="text" value="Como deseas llamarlo(a):">
                  <span class="character-counter">30 caract&eacute;res</span>
                </div>
              </fieldgroup>
            </form>
          </div> 
          <div class="action-box-btn">
            <a href="">Crear</a>
          </div> 
        </div>  
      </section>

    </div>
  </section>    
   
   
<script>
    var validation = "<?php echo $session_id; ?>";
</script>
            
@endsection
