<div class="headermain">
	<div>&nbsp;</div>
	<?php $snUserId = $sf_user->getAttribute('name', '', 'admin'); ?>
	<?php if($snUserId): ?>		
		<div class="clientwelcome">Wel-Come : <?php echo $snUserId; ?></div>
	<?php endif; ?>
</div>
