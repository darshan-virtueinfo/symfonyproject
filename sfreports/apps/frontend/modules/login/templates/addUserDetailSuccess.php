<form method="post" >
<div class="addreportmain">
	<div class="addusersub">
		<div class="adduserheading"><?php echo ($snReportId > 0 ) ? "Edit Profile" : "User Registration"; ?></div>
		<div class="adduser">
			<div class="usererror">&nbsp;</div>
			<div class="adduserlabel"><?php echo $oUserDetailform['firstname']->renderLabel(); ?><b> :&nbsp;</b></div>
			<div class="adduserfield"><?php echo $oUserDetailform['firstname']->render(); ?></div>
		</div>
		<div class="adduser">
			<div class="usererror">&nbsp;</div>
			<div class="adduserlabel"><?php echo $oUserDetailform['lastname']->renderLabel(); ?><b> :&nbsp;</b></div>
			<div class="adduserfield"><?php echo $oUserDetailform['lastname']->render(); ?></div>
		</div>
		<div class="adduser">
			<div class="usererror">
			<?php if($snReportId == 0 ) :?>
				<?php if($oUserDetailform['email']->hasError()):?>
					<?php echo $oUserDetailform['email']->getError(); ?>
				<?php endif; ?>&nbsp;	
			</div>
			<div class="adduserlabel"><?php echo $oUserDetailform['email']->renderLabel(); ?><b> :&nbsp;</b></div>
			<div class="adduserfield"><?php echo $oUserDetailform['email']->render(); ?></div>
			<?php endif; ?>
		</div>
		<div class="adduser">
			<div class="usererror">
				<?php if($snReportId == 0 ) :?>
   					<?php if($oUserDetailform['password']->hasError()):?>
   						<?php echo $oUserDetailform['password']->getError(); ?>
   					<?php endif;?>&nbsp;	
			</div>
					<div class="adduserlabel"><?php echo $oUserDetailform['password']->renderLabel(); ?><b> :&nbsp;</b></div>
					<div class="adduserfield"><?php echo $oUserDetailform['password']->render(); ?></div>
				<?php endif;?>		
		</div>
		<div class="adduser">
			<div class="usererror">
				<?php if($snReportId == 0 ) :?>
   					<?php if($oUserDetailform['retype_password']->hasError()):?>
   						<?php echo $oUserDetailform['retype_password']->getError(); ?>
   					<?php endif;?>&nbsp;	
			</div>
					<div class="adduserlabel"><?php echo $oUserDetailform['retype_password']->renderLabel(); ?><b> :&nbsp;</b></div>
					<div class="adduserfield"><?php echo $oUserDetailform['retype_password']->render(); ?></div>
				<?php endif;?>	
		</div>
		<div class="adduser">
			<div class="usererror">&nbsp;</div>
			<div class="adduserlabel">&nbsp;</div>
			<div class="adduserfield">
				<?php echo ($snReportId > 0 ) ? "<input type=submit value=Edit title=Edit>" : "<input type=submit value=Add title=Add>"; ?>
       		 	<?php echo ($snReportId > 0 ) ? button_to('Cancel', 'reports/addreportdetail') : button_to('Cancel', 'login/login') ;?>
       		</div>
		</div>
	</div>
</div>		
</form>
<!--<table border=1 align="center" style="margin-top: 25px;">
	<tr>
		<th align="center" colspan=2>User Register</th>
	</tr>
	<tr>    
     	<td align="right"><?php echo $oUserDetailform['firstname']->renderLabel(); ?><b> :&nbsp;</b></td>
        <td><?php echo $oUserDetailform['firstname']->render(); ?></td>
   	</tr>
   	<tr>    
     	<td align="right"><?php echo $oUserDetailform['lastname']->renderLabel(); ?><b> :&nbsp;</b></td>
        <td><?php echo $oUserDetailform['lastname']->render(); ?></td>
   	</tr>
   	<?php //if($oUserDetailform['email']->hasError()):?>
	<tr>
		<td>&nbsp;</td>
		<td class="err_font" height="30px;" align="left"><?php //echo $oUserDetailform['email']->getError(); ?></td>
	</tr>
	<?php //endif; ?>
   	<tr>    
     	<td align="right"><?php //echo $oUserDetailform['email']->renderLabel(); ?><b> :&nbsp;</b></td>
        <td><?php //echo $oUserDetailform['email']->render(); ?></td>
   	</tr>
   	<?php if($snReportId == 0 ) :?>
   	<?php if($oUserDetailform['password']->hasError()):?>
	<tr>
		<td>&nbsp;</td>
		<td class="err_font" height="30px;" align="left"><?php echo $oUserDetailform['password']->getError(); ?></td>
	</tr>
	<?php endif; ?>
   	<tr>    
     	<td align="right"><?php echo $oUserDetailform['password']->renderLabel(); ?><b> :&nbsp;</b></td>
        <td><?php echo $oUserDetailform['password']->render(); ?></td>
   	</tr>
   	<?php endif; ?>
   	<?php if($snReportId == 0 ) :?>
   	<?php if($oUserDetailform['retype_password']->hasError()):?>
	<tr>
		<td>&nbsp;</td>
		<td class="err_font" height="30px;" align="left"><?php echo $oUserDetailform['retype_password']->getError(); ?></td>
	</tr>
	<?php endif; ?>
	
   	<tr>    
     	<td align="right"><?php echo $oUserDetailform['retype_password']->renderLabel(); ?><b> :&nbsp;</b></td>
        <td><?php echo $oUserDetailform['retype_password']->render(); ?></td>
   	</tr>
   	<?php endif;?>
   <tr>    
   		<td>&nbsp;</td>
     	<td><?php echo ($snReportId > 0 ) ? "<input type=submit value=Edit title=Edit>" : "<input type=submit value=Add title=Add>"; ?>
        <?php echo ($snReportId > 0 ) ? button_to('Cancel', 'reports/addreportdetail') : button_to('Cancel', 'login/login') ;?></td>
   	</tr>
</table> 
-->