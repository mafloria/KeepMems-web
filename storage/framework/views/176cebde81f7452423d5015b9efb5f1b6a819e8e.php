<?php $__env->startSection('js'); ?>
<script src="<?php echo CC_JS_IMG; ?>js/person_memories.min.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
      
    <p><strong><?php echo $buddy_data['buddy']->buddy_nickname; ?><br /></strong></p>
    <div><?php echo $buddy_total_memories; ?> recuerdos</div>   
      <ul>
          <?php           
          foreach($buddy_memories['memory'] as $key=>$value){ ?>
            <li>
                <a href="javascript:void(0);" class="buddy-memory-row"  id="buddy-memory-row_<?php echo $value->memory_id; ?>">
                    <img src="<?php echo CC_JS_IMG; ?>images/memory_feeling/<?php echo $value->feeling; ?>" /><?php echo $value->title;?></a>
                
                <div class="buddy-memory-detail" id="buddy-memory-detail-<?php echo $value->memory_id; ?>" style="display: none">
                    <p><?php echo $value->desc; ?></p>
                </div>
             </li>
          <?php } ?>                    
      </ul>        
      <div class="content-section">                           
        <form name="new_person_form" id="new-person-form" action="" method="POST">
        <fieldgroup>          
            <div class="fieldinput">
                <input type="text" name="person_nickname" id="person-nickname" maxlength="25" value="" placeholder="Cómo llamas a esta persona? *" data-rule-required="true" data-msg-required="Cómo le llamas a la persona que quieres agregar?." data-rule-maxlength="25" data-msg-maxlength="No puedes exceder los 15 caracteres" />
            </div>
        </fieldgroup>    
        <fieldgroup>          
            <div class="fieldinput">                            
                        
            </div>
        </fieldgroup>    
        <fieldgroup>          
            <div class="fieldinput">                        
                                                              
            </div>
        </fieldgroup>    
        <div class="button-section">
              <input type="submit" name="add_person_button" id="add-person-button" value="Adicionar Persona" />                    
        </div>         
       </form>   
     </div>
   
   

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>