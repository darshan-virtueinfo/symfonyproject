<!--<table>
	<?php if(!empty($snUserId)): ?>
	<tr>
		<td>User Name : <?php echo $ssUserName; ?></td>
	</tr>
	<?php endif; ?>
	<?php if(!empty($snProjectId)): ?>
	<tr>
		<td>Project Name : <?php echo $ssProjectName; ?></td>
	</tr>
	<?php endif; ?>
	<?php if(!empty($snTaskId)): ?>
	<tr>	
		<td>Task Tyep : <?php echo $ssTaskType; ?></td>
	</tr>
	<?php endif; ?>
</table>
<table border=1 style="margin-top: 50px;" >
	<tr>
		<?php if(empty($snUserId)): ?>
			<th>User Name</th>
		<?php endif; ?>
		<?php if(empty($snProjectId)): ?>
			<th>Project Name</th>
		<?php endif;?>
		<th>Task Type</th>
		<th>Start Time</th>
		<th>End Time</th>
		<th>Task Time</th>
		<th>Date</th>
		<th>Task Detail</th>
	</tr>
	<?php $snTotalHour = 0.00; ?>
	<?php if($bPagination == true):?>
		<?php if($pager->count() > 0):?>
			<?php foreach($pager->getResults() as $ssReportDetail): ?>
				<tr>
					<?php $snTotalHour = $snTotalHour + $ssReportDetail->getTaskHour(); ?>
					<?php if(empty($snUserId)): ?>
						<td><?php echo $ssReportDetail->getUser()->getFirstName(); ?></td>
					<?php endif; ?>
					<?php if(empty($snProjectId)):?>
						<td><?php echo $ssReportDetail->getProjectDetail()->getProjectName();  ?></td>
					<?php endif; ?>
					<td><?php echo $ssReportDetail->getTaskType()->getTaskType(); ?></td>
					<td><?php echo $ssReportDetail->getStartTime(); ?></td>
					<td><?php echo $ssReportDetail->getEndTime(); ?></td>
					<td><?php echo $ssReportDetail->getTaskHour(); ?></td>
					<td><?php echo $ssReportDetail->getDateAt(); ?></td>
					<td><?php echo $ssReportDetail->getDetail(); ?></td>
				</tr>		 
			<?php endforeach;?>
		<?php else: ?>
		<tr> 
			<td colspan=3 align="center"><b>No Reports</b></td>
		</tr>	
	<?php endif;?>
</table>
		<?php if($pager->haveToPaginate() > 0):?>
		<?php include_partial('global/pagenation',array('pager' => $pager,'ssUrl' => $ssUrl));?>
		<?php endif;?>
	<?php else:?>
		<?php foreach($reportsDetail as $ssReportDetail): ?>
			<tr>
				<?php $snTotalHour = $snTotalHour + $ssReportDetail->getTaskHour(); ?>
				<?php if(empty($snUserId)): ?>
					<td><?php echo $ssReportDetail->getUser()->getFirstName(); ?></td>
				<?php endif; ?>
				<?php if(empty($snProjectId)):?>
					<td><?php echo $ssReportDetail->getProjectDetail()->getProjectName();  ?></td>
				<?php endif; ?>
				<td><?php echo $ssReportDetail->getTaskType()->getTaskType(); ?></td>
				<td><?php echo $ssReportDetail->getStartTime(); ?></td>
				<td><?php echo $ssReportDetail->getEndTime(); ?></td>
				<td><?php echo $ssReportDetail->getTaskHour(); ?></td>
				<td><?php echo $ssReportDetail->getDateAt(); ?></td>
				<td><?php echo $ssReportDetail->getDetail(); ?></td>
			</tr>		 
		<?php endforeach;?>
	<?php endif; ?>
<table>
	<tr>
		<?php if($snTotalHour):?>
			<td>Total Task hour : <?php echo $snTotalHour; ?></td>
		<?php endif; ?>
	</tr>
</table>

--><div class="defaultreportmain">
	<div class="defaultreportsub">
		<div>
			<?php if(!empty($snUserId)): ?>
			<div class="repotlistheading">User Name</div>
			<div class="reportlistcomma">:</div>	
			<div class="repotlistvalue"><?php echo $ssUserName; ?></div>
			<?php endif; ?>
			<?php if(!empty($snProjectId)): ?>
			<div class="repotlistheading">Project Name</div>
			<div class="reportlistcomma">:</div>	
			<div class="repotlistvalue"><?php echo $ssProjectName; ?></div>
			<?php endif; ?>	
			<?php if(!empty($snTaskId)): ?>
			<div class="repotlistheading">Task Type</div>
			<div class="reportlistcomma">:</div>
			<div class="repotlistvalue"><?php echo $ssTaskType; ?></div>
			<?php endif; ?>
		</div>
		<div class="defaultreport">
			<?php if(empty($snUserId)): ?>
				<div class="defaultreportheading">User Name</div>
			<?php endif; ?>
			<?php if(empty($snProjectId)):?>
				<div class="defaultreportheading">Project Name</div>
			<?php endif; ?>
			<?php if(empty($snTaskId)):?>	
				<div class="defaultreportheading">Task Type</div>
			<?php endif;?>
			<div class="defaultreportheading">Start Time</div>
			<div class="defaultreportheading">End Time</div>
			<div class="defaultreportheading">Task Hour</div>
			<div class="defaultreportheading">Task Date</div>
			<div class="findreportfieldtaskdetail">Task Detail</div>
		</div>
		<?php $snTotalHour = 0.00; ?>
		<?php if($bPagination == true):?>
			<?php if($pager->count() > 0):?>
				<?php foreach($pager->getResults() as $ssReportDetail):?>
					<?php $snTotalHour = $snTotalHour + $ssReportDetail->getTaskHour(); ?>
					<div class="defaultreport">
						<?php if(empty($snUserId)): ?>
							<div class="defaultreportvalue"><?php echo $ssReportDetail->getUser()->getFirstName(); ?></div>
						<?php endif; ?>
						<?php if(empty($snProjectId)):?>
							<div class="defaultreportvalue"><?php echo $ssReportDetail->getProjectDetail()->getProjectName();  ?></div>
						<?php endif; ?>	
						<?php if(empty($snTaskId)):?>
							<div class="defaultreportvalue"><?php echo $ssReportDetail->getTaskType()->getTaskType(); ?></div>
						<?php endif;?>	
						<div class="defaultreportvalue"><?php echo $ssReportDetail->getStartTime(); ?></div>
						<div class="defaultreportvalue"><?php echo $ssReportDetail->getEndTime(); ?></div>
						<div class="defaultreportvalue"><?php echo $ssReportDetail->getTaskHour(); ?></div>
						<div class="defaultreportvalue"><?php echo $ssReportDetail->getDateAt(); ?></div>
						<div class=findreportvaluetaskdetail><?php echo $ssReportDetail->getDetail(); ?></div>
					</div>	
				<?php endforeach; ?>
					<?php if($pager->haveToPaginate() > 0):?>
						<div class="defaultreport">
							<div class="defaultreportpagination" >
								<?php include_partial('global/pagenation',array('pager' => $pager,'ssUrl' => $ssUrl)); ?>
							</div>
						</div>
					<?php endif; ?>		
			<?php else: ?>
				No Reports
			<?php endif;?>
		<?php else:?>
		<?php foreach($reportsDetail as $ssReportDetail): ?>
			<?php $snTotalHour = $snTotalHour + $ssReportDetail->getTaskHour(); ?>
			<div class="defaultreport">
				<?php if(empty($snUserId)): ?>
					<div class="defaultreportvalue"><?php echo $ssReportDetail->getUser()->getFirstName(); ?></div>
				<?php endif; ?>
				<?php if(empty($snProjectId)):?>
					<div class="defaultreportvalue"><?php echo $ssReportDetail->getProjectDetail()->getProjectName();  ?></div>
				<?php endif; ?>	
				<?php if(empty($snTaskId)):?>
					<div class="defaultreportvalue"><?php echo $ssReportDetail->getTaskType()->getTaskType(); ?></div>
				<?php endif;?>	
				<div class="defaultreportvalue"><?php echo $ssReportDetail->getStartTime(); ?></div>
				<div class="defaultreportvalue"><?php echo $ssReportDetail->getEndTime(); ?></div>
				<div class="defaultreportvalue"><?php echo $ssReportDetail->getTaskHour(); ?></div>
				<div class="defaultreportvalue"><?php echo $ssReportDetail->getDateAt(); ?></div>
				<div class=findreportvaluetaskdetail><?php echo $ssReportDetail->getDetail(); ?></div>
			</div>
		<?php endforeach;?>
	<?php endif; ?>
		<div class="totaltask">
			<?php if($snTotalHour):?>
				Total Task hour : <?php echo $snTotalHour; ?>
			<?php endif; ?>
		</div>
	</div>
</div>