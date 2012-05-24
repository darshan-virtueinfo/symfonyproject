<?php $snUserId = $sf_user->getAttribute('id', '', 'client') ?>
<div class="menumain">
	<div class="submenu">
		<div class="menu"><?php echo link_to("HOME", "reports/index")?></div>
		<?php if($snUserId): ?>
			<div class="menu"><?php echo link_to("EDIT PROFILE", url_for('login/editUserDetail').'/id/'.$snUserId,array('title'=> 'Edit')); ?></div>
		<?php else: ?>	
			<div class="menu"><?php echo link_to("CREATE PROFILE", "login/addUserDetail")?></div>		
		<?php endif;?>	
		<div class="menu"><?php echo link_to("LOGIN", "login/login" )?></div>
		<div class="menu"><?php echo link_to("ADD REPORT", "reports/addreportdetail")?></div>
		<div class="menu"><?php echo link_to("VIEW RPORT", "reports/UserReportDetail")?></div>
		<div class="menu"><?php echo link_to("FIND REPORT", "reports/userReport")?></div>
		<div class="menu"><?php echo link_to("LOGOUT", "login/logout")?></div>
	</div>
</div>	