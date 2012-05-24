<?php //echo form_tag("login/login", array('name'=>'frmlogin')); ?>
<!--<table width="" border="1" cellspacing="0" cellpadding="0" align="center" style="margin-top: 50px;">
	<tr>
		<td></td>
     	<td height="30px;"><b>Login</b></td>
    </tr>
   	<?php if($sf_user->hasFlash('err_msg')): ?>
   	<tr>
    	<td class="err_font" height="30px;" colspan=2 align="center"><?php echo $sf_user->getFlash('err_msg'); ?></td>
    </tr>
    <?php endif; ?>
   
    <?php if($oLoginForm['email']->hasError()):?>
	<tr>
		<td>&nbsp;</td>
		<td class="err_font" height="30px;" align="left"><?php echo $oLoginForm['email']->getError(); ?></td>
	</tr>
	<?php endif; ?>
    <tr>    
     	<td height="30px;" width="100px;" align="right"><?php echo $oLoginForm['email']->renderLabel(); ?><b> :&nbsp;</b></td>
        <td><?php echo $oLoginForm['email']->render(); ?></td>
   </tr>
   <?php if($oLoginForm['password']->hasError()):?>
	<tr>
		<td>&nbsp;</td>
		<td class="err_font" height="30px;" align="left"><?php echo $oLoginForm['password']->getError(); ?></td>
	</tr>
	<?php endif; ?>
   <tr>
   		<td height="30px;" width="150px;" align="right"><?php echo $oLoginForm['password']->renderLabel(); ?><b> :&nbsp;</b></td>
        <td width="250px;"><?php echo $oLoginForm['password']->render(); ?></td>
   </tr>
   <tr>
   		<td >&nbsp;</td>
        <td height="30px;"><input type = "submit" name="" value="Login" title="Login"></td>
   </tr>
</table>-->
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