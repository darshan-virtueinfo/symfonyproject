<?php $snUserId = $sf_user->getAttribute('id', '', 'client') ?>
<?php //Include Css file ?>
<?php echo stylesheet_tag('ui-lightness/jquery-ui-1.8.19.custom.css'); ?>

<?php //Include Js file ?>
<?php echo javascript_include_tag('jquery-1.7.2.min.js'); ?>
<?php echo javascript_include_tag('jquery-ui-1.8.19.custom.min.js'); ?>
<?php echo javascript_include_tag('jquery.ui.widget.js'); ?>
<?php echo javascript_include_tag('jquery.ui.mouse.js'); ?>
<?php echo javascript_include_tag('jquery.ui.slider.js'); ?>
<?php echo javascript_include_tag('jquery-ui-timepicker-addon.js'); ?>
<?php echo javascript_include_tag('jquery-ui-sliderAccess.js'); ?>

<script>
$(document).ready(function() {
	$('#reports_start_time, #reports_end_time').timepicker( { });
 	$("#reports_date_at").datepicker({ changeMonth: true, changeYear: true });
 	$("#reports_date_at").datepicker("option", "dateFormat", "yy-mm-dd", { });
});
</script>
<form action="<?php echo $ssUrl ; ?>" method="POST" enctype="multipart/form-data">
<div class="addreportmain">
	<div class="addreportsub">
		<div class="addreportheading">Add Report Detail</div>
		<div class="addreport">
			<div class="addreportlabel"><?php echo $form['project_id']->renderLabel(); ?><B> : </B></div>
			<div class="addreportfield" ><?php echo $form['project_id']->render(); ?></div>
			<div class="reporterror">
				<?php if($form['project_id']->hasError()):?>
					<?php echo $form['project_id']->getError(); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="addreport">
			<div class="addreportlabel"><?php echo $form['task_id']->renderLabel(); ?><B> : </B></div>
			<div class="addreportfield"><?php echo $form['task_id']->render(); ?></div>
			<div class="reporterror">
				<?php if($form['task_id']->hasError()):?>
					<?php echo $form['task_id']->getError(); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="addreportdescription">
			<div class="addreportdescriptionlabel"><?php echo $form['detail']->renderLabel(); ?><B> : </B></div>
			<div class="addreportdescriptionfield"><?php echo $form['detail']->render(); ?></div>
			<div class="reportdescriptionerror">
				<?php if($form['detail']->hasError()):?>
					<?php echo $form['detail']->getError(); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="addreport">
			<div class="addreportlabel"><?php echo $form['start_time']->renderLabel(); ?><B> : </B></div>
			<div class="addreportfield"><?php echo $form['start_time']->render(); ?></div>
			<div class="reporterror">
				<?php if($form['start_time']->hasError()):?>
					<?php echo $form['start_time']->getError(); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="addreport">
			<div class="addreportlabel"><?php echo $form['end_time']->renderLabel(); ?><B> : </B></div>
			<div class="addreportfield"><?php echo $form['end_time']->render(); ?></div>
			<div class="reporterror">
				<?php if($form['end_time']->hasError()):?>
					<?php echo $form['end_time']->getError(); ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="addreport">
			<div class="addreportlabel"><?php echo $form['task_hour']->renderLabel(); ?><B> : </B></div>
			<div class="addreportfield"><?php echo $form['task_hour']->render(); ?></div>
			<div class="reporterror">
				<?php if($form['task_hour']->hasError()):?>
					<?php echo $form['task_hour']->getError(); ?>
				<?php endif; ?>
			</div>
		</div>
		<?php $snEditId = $sf_params->get('id'); ?>
		<?php if(empty($snEditId)): ?>
		<div class="addreport">
			<div class="addreportlabel"><?php echo $form['date_at']->renderLabel(); ?><B> : </B></div>
			<div class="addreportfield"><?php echo $form['date_at']->render(); ?></div>
			<div class="reporterror">
				<?php if($form['date_at']->hasError()):?>
					<?php echo $form['date_at']->getError(); ?>
				<?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
		<div class="addreport">
			<div class="addreportlabel"><?php echo $form['user_id']->render(); ?>&nbsp;</div>
			<div class="addreportfield">
			<?php $snEditId = $sf_params->get('id'); ?>
			<?php echo ($snEditId > 0) ? "<input type=submit name=sub_reports Value=Edit>" : "<input type=submit name=sub_reports Value=Add>" ?>
			<?php echo ($snEditId > 0 ) ? button_to('Cancel', 'reports/UserReportDetail') : button_to('Cancel', 'reports/addreportdetail') ;?>
			</div>
		</div>
	</div>	
</div>
</form>
<!--<table align="center" border="1" style="padding-top: 0px">
	<?php //sf_params->get('id'); ?>
	<tr height="50px;">
		<td>&nbsp;</td>
		<th align="left" >Reports</th>
	</tr>
	<?php if($form['project_id']->hasError()):?>
	<tr>
		<td>&nbsp;</td>
		<td class="err_font"><?php echo $form['project_id']->getError(); ?></td>
	</tr>
	<?php endif; ?>
	<tr>
		<td align="right" ><?php echo $form['project_id']->renderLabel(); ?><B> : </B></td>
		<td><?php echo $form['project_id']->render(); ?></td>
	</tr>
	
	<?php if($form['task_id']->hasError()):?>
	<tr>
		<td>&nbsp;</td>
		<td class="err_font"><?php echo $form['task_id']->getError(); ?></td>
	</tr>
	<?php endif; ?>
	<tr>
		<td align="right" ><?php echo $form['task_id']->renderLabel(); ?><B> : </B></td>
		<td><?php echo $form['task_id']->render(); ?></td>
	</tr>
	
	<?php if($form['detail']->hasError()):?>
	<tr>
		<td>&nbsp;</td>
		<td class="err_font"><?php echo $form['detail']->getError(); ?></td>
	</tr>
	<?php endif; ?>
	<tr>
		<td align="right" ><?php echo $form['detail']->renderLabel(); ?><B> : </B></td>
		<td><?php echo $form['detail']->render(); ?></td>
	</tr>
	
	<?php if($form['start_time']->hasError()):?>
	<tr>
		<td>&nbsp;</td>
		<td class="err_font"><?php echo $form['start_time']->getError(); ?></td>
	</tr>
	<?php endif; ?>
	<tr>
		<td align="right" ><?php echo $form['start_time']->renderLabel(); ?><B> : </B></td>
		<td ><?php echo $form['start_time']->render(); ?></td>
	</tr>
	
	<?php if($form['end_time']->hasError()):?>
	<tr>
		<td>&nbsp;</td>
		<td class="err_font"><?php echo $form['end_time']->getError(); ?></td>
	</tr>
	<?php endif; ?>
	<tr>
		<td align="right" ><?php echo $form['end_time']->renderLabel(); ?><B> : </B></td>
		<td ><?php echo $form['end_time']->render(); ?></td>
	</tr>
	
	<?php if($form['task_hour']->hasError()):?>
	<tr>
		<td>&nbsp;</td>
		<td class="err_font"><?php echo $form['task_hour']->getError(); ?></td>
	</tr>
	<?php endif; ?>
	<tr>
		<td align="right" ><?php echo $form['task_hour']->renderLabel(); ?><B> : </B></td>
		<td><?php echo $form['task_hour']->render(); ?></td>
	</tr>
	<?php $snEditId = $sf_params->get('id'); ?>
	<?php if(empty($snEditId)): ?>
		<?php //if($form['date_at']->hasError()):?>
		<tr>
			<td>&nbsp;</td>
			<td class="err_font" ><?php echo $form['date_at']->getError(); ?></td>
		</tr>
		
	<?php //endif; ?>
	<tr>
		<td align="right" ><?php echo $form['date_at']->renderLabel(); ?><B> : </B></td>
		<td ><?php echo $form['date_at']->render(); ?></td>
	</tr>
	<?php endif; ?>
	<tr>
		<td><?php echo $form['user_id']->render(); ?></td>
		<?php if($snEditId):?>
			<td><input type="submit" name="sub_reports" Value="Edit"></td>
		<?php else: ?>
			<td><input type="submit" name="sub_reports" Value="Add"></td>
		<?php endif;?>		
	</tr>
</table>
</form>	-->