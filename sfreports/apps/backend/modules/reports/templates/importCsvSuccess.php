<form method="post" enctype="multipart/form-data" action="<?php echo url_for('reports/importCsv'); ?>">
<div class="addreportmain">
	<div class="addreportsub">
		<div class="addreportheading"></div>
		<div class="addreport">
			<div class="addreportlabel"><?php echo $form['filename']->renderLabel(); ?><B> : </B></div>
			<div class="addreportfield"><?php echo $form['filename']->render(); ?></div>
		</div>
		<div class="addreport">
			<div class="addreportlabel">&nbsp;</div>
			<div class="addreportfield"><input type="submit" value="Submit"></input></div>
		</div>
		<div class="addreport">
			<div class="addreportlabel">&nbsp;</div>
			<div class="addreportfield" style="font-weight: bold;">
				<?php if($sf_user->hasFlash('total_file')):?>
					<?php echo $sf_user->getFlash('total_file')."<br>"; ?>
				<?php endif; ?>
			</div>
		</div>
		
		<div class="addreport">
			<div class="addreportlabel">&nbsp;</div>
			<div class="addreportfield" style="font-weight: bold;">
				<?php if($sf_user->hasFlash('total_insert')):?>
					<?php echo $sf_user->getFlash('total_insert')."<br>"; ?>
				<?php endif; ?>
			</div>
		</div>
		
		<div class="addreport">
			<div class="addreportlabel">&nbsp;</div>
			<div class="addreportfield" style="font-weight: bold;">
				<?php if($sf_user->hasFlash('Duplicate_row')):?>
					<?php echo $sf_user->getFlash('Duplicate_row')."<br>"; ?>
				<?php endif; ?>
			</div>
		</div>
		
		<div class="addreport">
			<div class="addreportlabel">&nbsp;</div>
			<div class="addreportfield" style="font-weight: bold;">
				<?php if($sf_user->hasFlash('total_row')):?>
					<?php echo $sf_user->getFlash('total_row')."<br>"; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
</form>		
<!--<table>
	<tr>
		<td align="right" ><?php echo $form['filename']->renderLabel(); ?><B> : </B></td>
		<td><?php echo $form['filename']->render(); ?></td>
		<td><input type="submit" value="Submit"></input></td>
	</tr>
	
</table>
</form>
<table style="padding-bottom: 30px;">
<?php $ssImportFileMessages = '';?>
	<?php if($ssImportFileMessages):?>
		<?php foreach($ssImportFileMessages as $ssMessages):?>
			<tr>
				<td><?php echo $ssMessages; ?></td>
			</tr>
		<?php endforeach;?>
	<?php endif; ?>
</table>
<table>
	<?php if($sf_user->hasFlash('total_file')):?>
	<tr>
		<td><?php echo $sf_user->getFlash('total_file')."<br>"; ?></td>
	</tr>
	<?php endif; ?>
	<?php if($sf_user->hasFlash('total_insert')):?>
	<tr>	
		<td><?php echo $sf_user->getFlash('total_insert')."<br>"; ?></td>
	</tr>
	<?php endif; ?>
	<?php if($sf_user->hasFlash('Duplicate_row')):?>
	<tr>	
		<td><?php echo $sf_user->getFlash('Duplicate_row')."<br>"; ?></td>
	</tr>
	<?php endif; ?>
	<?php if($sf_user->hasFlash('total_row')):?>	
	<tr>
		<td><?php echo $sf_user->getFlash('total_row')."<br>"; ?></td>
	</tr>
	<?php endif; ?>	
</table>
-->