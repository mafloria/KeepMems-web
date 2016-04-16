@extends('layouts.user')

@section('js')
<script src="<?php echo CC_JS_IMG; ?>js/person_memories.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo CC_JS_IMG; ?>styles/jquery/jquery-ui-1.10.4.custom.min.css">
<script src="<?php echo CC_JS_IMG; ?>js/jquery/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<script src="<?php echo CC_JS_IMG;?>js/calendar-i18n/jquery.ui.datepicker-es.js" type="text/javascript"></script>

@endsection

@section('content')

<!--PAGES PERSON MEMORIES-->
  <section class="pages-section my-list">
    <div class="section-full-border title-main-section">
        <div class="content-section">
          <div class="display-section">
            <div class="display-section-avatar">  
              <svg class="avatar-<?php echo $buddy_data['buddy']->avatar; ?>" style="display:none;"><use  <?php echo 'xlink:href="#avatar-'.$buddy_data['buddy']->avatar.'"'; ?> /></svg>                
            </div>
            <div class="display-section-info">
                <div class="display-section-name">
                  <?php echo $buddy_data['buddy']->buddy_nickname; ?>
                </div>
                <div class="display-section-resume">
                  <span><?php echo $buddy_data['buddy']->num_memories; ?> Recuerdos</span>
                  <span><?php echo $buddy_data['buddy']->num_interest; ?> Inter&eacute;ses</span>
                </div>
            </div>
            <a class="compatibility-item-result comp-positive" href="">
              <svg class="comp-result-icon"><use xlink:href="#compatible" /></svg> 
              <p><?php echo $buddy_data['buddy']->compatibility; ?>%x</p>
              <span>Ver Compatiblidad</span> 
            </a>
          </div>
        </div>
      </div>
   <?php if($buddy_total_memories){         
          foreach($buddy_memories['memory'] as $key=>$value){       
   ?>
      <div class="section-full-border">
        <div class="content-section">
          <a class="display-section link-display-mem-resume" href="javascript:void(0);" id="link-display-mem-resume_<?php echo $value->memory_id; ?>">
            <div class="display-section-avatar">  
              <svg class="agradable"><use <?php echo 'xlink:href="#'.$value->feeling.'"'; ?> /></svg>               
            </div>
            <div class="display-section-info">
                <div class="display-section-name">
                  <?php echo $value->title; ?>
                </div>
                <div class="show-memory-resume" id="show-memory-resume_<?php echo $value->memory_id; ?>" style="display: none">
                  <p class="resume-descrip"><?php echo $value->desc; ?></p>
                  <?php if(count($value->compatibility)){ ?>
                  <ul class="resume-interest-list">
                    <h4>Inter&eacute;ses en el recuerdo</h4>
                    <?php foreach($value->compatibility as $interest=>$percentage) {
                        $compatibility = ($percentage > 60)?'xlink:href="#compatible"':'xlink:href="#incompatible"';
                    ?>
                    <li>
                      <svg class=""><use <?php echo $compatibility; ?> /></svg> 
                      <p><?php echo $interest; ?></p>
                    </li>
                    <?php } ?>                    
                  </ul>
                  <?php } ?> 
                </div>
            </div>
          </a>
        </div>
      </div>
      <?php }//end foreach ?>      
    <?php } ?>    
    <a class="add-btn" id="link-add-person-memory" href="javascript:void(0);">
      <svg class="icon-plus"><use xlink:href="#agregar" /></svg>
      <p>Agregar Recuerdo</p>
    </a>
  </section>
<!--///-->
  <section class="pages-section action-box-wrap" id="new-person-memory-section" style="display: none">
        <div class="action-box">
          <div class="action-box-title">
            Agrega un recuerdo con <?php echo $buddy_data['buddy']->buddy_nickname; ?>
          </div> 
          <div class="action-box-info">
            <form name="new_person_memory_form" id="new-person-memory-form" action="" method="POST">
              <input type="hidden" name="memory_feeling" id="hidden-memory-feeling" value="" data-rule-required="true" data-msg-required="Asignale un estado al recuerdo." />
              <fieldgroup>
                <div class="fieldinput">
                  <input type="text" name="memory_title" id="memory-title" maxlength="30" value="" placeholder="T&iacute;tulo del Recuerdo" data-rule-required="true" data-msg-required="Dinos qué título le colocas al recuerdo?." data-rule-maxlength="30" data-msg-maxlength="No puedes exceder los 30 caracteres">
                  <span class="character-counter" id="memory-title-charcounter">30 caracteres</span>
                </div>
                <div class="fieldinput">
                  <textarea name="memory_desc" id="memory-desc" placeholder="Describe tu recuerdo"  data-rule-required="true" data-msg-required="Describe tu recuerdo." data-rule-maxlength="140" data-msg-maxlength="No puedes exceder los 140 caracteres"></textarea>
                  <span class="character-counter" id="memory-desc-charcounter">140 caracteres</span>
                </div>
                <div class="fieldinput pick-date">
                    <!-- <svg class="icon-plus"><use xlink:href="#calendario" /></svg> -->
                  <label class="label-title">Agrega una fecha:</label>                                                                      
                    <input type="image" name="image_picker" id="datepicker" class="icon-plus" src="../../images/calendario.svg" /> <!--  -->
                    <div id="memory-date-display"></div>                        
                  </label>                   
                  <input type="hidden" name="memory_date" id="memory-date" value="" data-rule-required="true" data-msg-required="De qué fecha es el recuerdo." />
                </div>
                <div class="fieldinput memory-std">
                  <label for="mamery-felling" class="label-memory-feeling label-title">Asignale un estado al recuerdo:</label>
                  <ul class="estado-recuerdo">
                    <li>                       
                      <a href="javascript:void(0);" class="memory-feeling" id="great">
                        <svg><use xlink:href="#great" /></svg>
                        <span>me encanta</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="memory-feeling" id="bad">
                        <svg><use xlink:href="#bad" /></svg>
                        <span>No me gusta</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="memory-feeling" id="sad">
                        <svg><use xlink:href="#sad" /></svg>
                        <span>Triste</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="memory-feeling" id="nice">
                        <svg><use xlink:href="#nice" /></svg>
                        <span>me gusta</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="memory-feeling" id="wow">
                        <svg><use xlink:href="#wow" /></svg>
                        <span>Sorpresa</span>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="memory-feeling" id="hate">
                        <svg><use xlink:href="#hate" /></svg>
                        <span>Lo odio</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </fieldgroup>
              <input name="create_memory" type="submit" value="Crear Recuerdo">
            </form>
          </div> 
        </div>  
  </section>

@endsection
