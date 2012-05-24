<?php echo form_tag("login/login", array('name'=>'frmlogin')); ?>
<div class="loginmain">
	<div class="loginsub">
		<div class="sucessmsg">
		<?php if($sf_user->hasFlash('success_flash_msg')): ?>
			<?php echo $sf_user->getFlash('success_flash_msg'); ?>
		<?php endif; ?>
		</div>
		<fieldset class="loginfieldset"><legend>Login</legend>
		<div class="loginform">
			<div class="loginerror">
			<?php if($oLoginForm['email']->hasError()):?>
				<?php echo $oLoginForm['email']->getError(); ?>
			<?php endif; ?>
			<?php if($sf_user->hasFlash('err_msg')): ?>
				<?php echo $sf_user->getFlash('err_msg'); ?>
			<?php endif; ?>
			</div>
			<div class="loginlabel"><?php echo $oLoginForm['email']->renderLabel(); ?><b> : </b></div>
			<div class="loginfield"><?php echo $oLoginForm['email']->render(); ?></div>
		</div>
		<div class="loginform">
			<div class="loginerror">
			<?php if($oLoginForm['password']->hasError()):?>
				<?php echo $oLoginForm['password']->getError(); ?>
			<?php endif; ?>
			</div>
			<div class="loginlabel"><?php echo $oLoginForm['password']->renderLabel(); ?><b> : </b></div>
			<div class="loginfield"><?php echo $oLoginForm['password']->render(); ?></div>
		</div>
		<div class="loginform">
			<div class="loginlabel">&nbsp;<?php //echo button_to("Register", "login/addUserDetail"); ?></div>
			<div class="loginfield"><input type="submit" name="" value="Login" title="Login" id="button"></div>
		</div>
		</fieldset>		
	</div>
</div>