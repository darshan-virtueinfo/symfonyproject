<?php $snUserId = $sf_user->getAttribute('id', '', 'client') ?>
<div class="defaultreportmain">
	<div class="defaultreportsub">
		<div class="defaultreport">
			<div class="defaultreportheading">Project Name</div>
			<div class="defaultreportheading">Task Type</div>
			<div class="defaultreportheading">Start Time</div>
			<div class="defaultreportheading">End Time</div>
			<div class="defaultreportheading">Task Hour</div>
			<div class="defaultreportheading">Task Date</div>
			<div class="defaultreportfieldtaskdetail">Task Detail</div>
			<div class="defaultreportheading">Action</div>
		</div>
		<?php foreach($pager->getResults() as $ssReportDetail):?>
		<div class="defaultreport">
			<div class="defaultreportvalue"><?php echo $ssReportDetail->getProjectDetail()->getProjectName(); ?></div>
			<div class="defaultreportvalue"><?php echo $ssReportDetail->getTaskType()->getTaskType(); ?></div>
			<div class="defaultreportvalue"><?php echo $ssReportDetail->getStartTime(); ?></div>
			<div class="defaultreportvalue"><?php echo $ssReportDetail->getEndTime(); ?></div>
			<div class="defaultreportvalue"><?php echo $ssReportDetail->getTaskHour(); ?></div>
			<div class="defaultreportvalue"><?php echo $ssReportDetail->getDateAt(); ?></div>
			<div class=defaultreportvaluetaskdetail><?php echo $ssReportDetail->getDetail(); ?></div>
			<div class="defaultreportvalue"><?php echo link_to(image_tag('edit.png'),url_for('reports/editreportdetail').'/id/'.$ssReportDetail->getId(),array('title'=> 'Edit'));?>&nbsp;
		<?php echo image_tag('delete.png') /*,url_for('').'/id/'.$ssReportDetail->getId(),array('title'=> 'Delete')*/ ;?></div>
		</div>
		<?php endforeach; ?>
		<?php if($pager->haveToPaginate() > 0):?>
		<div class="defaultreport">
			<div class="defaultreportpagination" >
				<?php include_partial('global/pagenation',array('pager' => $pager,'ssUrl' => $ssUrl)); ?>
			</div>
		</div>		
		<?php endif;?>
		<!--<div class="defaultreportpagination">
			<?php if($pager->haveToPaginate() > 0):?>
				<?php //include_partial('global/pagenation',array('pager' => $pager,'ssUrl' => $ssUrl)); ?>
			<?php endif;?>
		</div>
	--></div>
</div>			
<!--<table border=1  width="60%" >
	<tr>
		<td><b>Project Name</b></td>
		<td><b>Task Type</b></td>
		<td><b>Start Time</b></td>
		<td><b>End Time</b></td>	
		<td><b>Task Hour</b></td>
		<td><b>Task Date</b></td>
		<td><b>Task Detail</b></td>
		<td><b>Action</b></td>
	</tr>
	<?php foreach($pager->getResults() as $ssReportDetail):?>
	<tr>
		<td><?php echo $ssReportDetail->getProjectDetail()->getProjectName(); ?></td>
		<td><?php echo  $ssReportDetail->getTaskType()->getTaskType(); ?></td>
		<td><?php echo  $ssReportDetail->getStartTime(); ?></td>
		<td><?php echo  $ssReportDetail->getEndTime(); ?></td>
		<td><?php echo $ssReportDetail->getTaskHour(); ?></td>
		<td><?php echo $ssReportDetail->getDateAt(); ?></td>
		<td><?php echo $ssReportDetail->getDetail(); ?></td>
		<td><?php echo link_to(image_tag('edit.png'),url_for('reports/editreportdetail').'/id/'.$ssReportDetail->getId() ,array('title'=> 'Edit'));?>&nbsp;
		<?php echo image_tag('delete.png') /*,url_for('').'/id/'.$ssReportDetail->getId(),array('title'=> 'Delete')*/ ;?></td>
	</tr>
	<?php endforeach; ?>
</table>
<?php if($pager->haveToPaginate() > 0):?>
		<?php include_partial('global/pagenation',array('pager' => $pager,'ssUrl' => $ssUrl));?>
<?php endif;?>-->