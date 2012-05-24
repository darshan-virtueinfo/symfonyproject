<?php echo stylesheet_tag('ui-lightness/jquery-ui-1.8.19.custom.css'); ?>
<?php echo javascript_include_tag('jquery-1.7.2.min.js'); ?>
<?php echo javascript_include_tag('jquery-ui-1.8.19.custom.min.js'); ?>
<script>
$(document).ready(function() {
	$( "#reports_startdate, #reports_enddate" ).datepicker({ changeMonth: true, changeYear: true});
 	$("#reports_startdate, #reports_enddate").datepicker("option", "dateFormat", "yy-mm-dd", { });
});

</script>
<?php $snUserId = $sf_user->getAttribute('id', '', 'admin') ?>
<form action='<?php echo url_for('reports/reportDetail') ?>' method="POST">
<div class="addreportmain">
	<div class="addreportsub">
		<div class="addreportheading">Find Report Detail</div>
		<div class="addreport">
			<div class="addreportlabel"><?php echo $form['user_id']->renderLabel(); ?><B> : </B></div>
			<div class="addreportfield"><?php echo $form['user_id']->render(); ?></div>
		</div>
		<div class="addreport">
			<div class="addreportlabel"><?php echo $form['project_id']->renderLabel(); ?><B> : </B></div>
			<div class="addreportfield"><?php echo $form['project_id']->render(); ?></div>
		</div>
		<div class="addreport">
			<div class="addreportlabel"><?php echo $form['task_id']->renderLabel(); ?><B> : </B></div>
			<div class="addreportfield"><?php echo $form['task_id']->render(); ?></div>
		</div>
		<div class="addreport">
			<div class="addreportlabel"><?php echo $form['startdate']->renderLabel(); ?><B> : </B></div>
			<div class="addreportfield"><?php echo $form['startdate']->render(); ?></div>
		</div>
		<div class="addreport">
			<div class="addreportlabel"><?php echo $form['enddate']->renderLabel(); ?><B> : </B></div>
			<div class="addreportfield"><?php echo $form['enddate']->render(); ?></div>
		</div>
		<div class="addreport">
			<div class="addreportlabel">&nbsp;</div>
			<div class="addreportfield"><input type="submit" name="reporttype" value="Display"></input></div>
		</div>
	</div>
</div>		

<!--<table style="margin-top: 50px;">
	<tr>
		<td align="right" ><?php echo $form['user_id']->renderLabel(); ?><B> : </B></td>
		<td><?php echo $form['user_id']->render(); ?></td>
	</tr>
	<tr>
		<td align="right" ><?php echo $form['project_id']->renderLabel(); ?><B> : </B></td>
		<td><?php echo $form['project_id']->render(); ?></td>
	</tr>
	<tr>
		<td align="right" ><?php echo $form['task_id']->renderLabel(); ?><B> : </B></td>
		<td><?php echo $form['task_id']->render(); ?></td>
	</tr>
	<tr>
		<td align="right" ><?php //echo $form['title']->renderLabel(); ?></td>
		<td><?php //echo $form['title']->render(); ?></td>
	</tr>
	<tr>
		<td align="right" ><?php echo $form['startdate']->renderLabel(); ?><B> : </B></td>
		<td ><?php echo $form['startdate']->render(); ?></td>
	</tr>
	<tr>
		<td align="right" ><?php echo $form['enddate']->renderLabel(); ?><B> : </B></td>
		<td ><?php echo $form['enddate']->render(); ?></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="reporttype" value="Display"></input></td>
	</tr>
</table>
--></form>