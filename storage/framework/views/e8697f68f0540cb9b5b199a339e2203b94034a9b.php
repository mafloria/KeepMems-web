<?php $__env->startSection('content'); ?>
  <section class="intro-section center">
    <h1><img src="images/keep-app-logo.png" width="87" height="91"></h1>
    <!--<svg class="icon"><use xlink:href="#..." /></svg>-->
    <p>
      <strong>Bienvenido a Keep Memories<br /></strong>
      Un espacio donde podr&aacute;s crear recuerdos e inter&eacute;ses que tengas en comun con cualquier persona de forma gratis y privada.
    </p>
    <div class="register-log-menu">
      <a href="javascript:void(0);" id="signup-link">Crea una cuenta</a>
      <a href="javascript:void(0);" class="active" id="signin-link">Ingresa</a>
    </div>
  </section>
  <section class="homeLog-section">
          
    <div id="signup-signin-messages"></div>
    <div class="content-section" id="singin-div-form">       
       <form name="mem_user_signin_form" id="mem-user-signin-form" action="" method="POST">
          <fieldgroup>          
            <div class="fieldinput">          
              <input type="email" name="user_email" id="user-email" value="" placeholder="Correo Electr&oacute;nico" data-rule-required="true" data-rule-email="true" data-msg-required="Ingresa tu Correo Electr&oacute;nico." data-msg-email="Ingresa un Correo Electr&oacute;nico válido." />              
            </div>
            <div class="fieldinput">
              <input type="password" name="user_pswd" id="user-pswd" value="" placeholder="Contraseña" autocomplete="off" data-rule-required="true" data-msg-required="Ingresa tu contraseña." />
            </div>        
          </fieldgroup>       
            <div class="button-section">
              <input type="submit" name="login_button" id="login-button" value="Ingresar" />
            </div>
       </form>
    </div>
    
    <div class="content-section" id="singup-div-form" style="display: none">
       <form name="mem_user_signup_form" id="mem-user-signup-form" method="POST">
          <fieldgroup>          
            <div class="fieldinput">          
              <input type="email" name="user_email" id="user-email" placeholder="Correo Electr&oacute;nico" data-rule-required="true" data-rule-email="true" data-msg-required="Ingresa tu Correo Electr&oacute;nico." data-msg-email="Ingresa un Correo Electr&oacute;nico válido." />              
            </div>
            <div class="fieldinput">
              <input type="password" name="user_pswd" id="signup-user-pswd" placeholder="Contraseña" autocomplete="off" data-rule-required="true" data-msg-required="Ingresa una Contraseña." />
            </div>
            <div class="fieldinput">
              <input type="password" name="user_pswd_confirm" id="user-pswd-confirm" placeholder="Confirma tu Contraseña" autocomplete="off" data-rule-required="true" data-msg-required="Confirma tu contraseña." data-rule-equalto="#signup-user-pswd" data-msg-equalto="La contrase&ntilde;a no coincide." />              
            </div>
          </fieldgroup> 
          <fieldgroup>
            <div class="facebook-log center">
                <a href="">Registrate con facebook</a>
                <p>No te preocupes, nosotros no utilizaremos, ni compartiremos informaci&oacute;n en tu muro de Facebook.</p>
            </div>
            <div class="agreement">
                <a href="javascript:void(0);"><svg class="icon-check"><use xlink:href="#check" /></svg>Estoy deacuerdo con los t&eacute;rminos de uso y pol&iacute;ticas de privacidad.</a>
            </div>
          </fieldgroup>
            <div class="button-section">
              <input type="submit" name="signup_button" id="signup-button" value="Registrarme" />
            </div>
      </form>
  </div>
  </section>
  <?php echo "JSJSJ: ".WEBSERVICES; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.visitor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>