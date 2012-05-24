<?php $snUserId = $sf_user->getAttribute('id', '', 'client') ?>
<div class="menumain">
	<div class="submenu">
		<div class="menu"><?php echo link_to("HOME", "reports/index")?></div>
		<div class="menu"><?php echo link_to("LOGIN", "login/login")?></div>
		<div class="menu"><?php echo link_to("VIEW RPORT", "reports/reportType")?></div>
		<div class="menu"><?php echo link_to("EXPORT CSV", "reports/exportCsv")?></div>
		<div class="menu"><?php echo link_to("IMPORT CSV", "reports/importCsv")?></div>
		<div class="menu"><?php echo link_to("LOGOUT", "login/logout")?></div>
	</div>
</div>	