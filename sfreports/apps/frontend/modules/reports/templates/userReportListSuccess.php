<?php $snUserId = $sf_user->getAttribute('id', '', 'client') ?>
<div class="defaultreportmain">
	<div class="defaultreportsub">
		<div>
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