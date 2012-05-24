<div class="pagination">
	<?php echo link_to('First',$ssUrl.'/page/'.$pager->getFirstPage());?>
</div>
<div class="pagination">	
	<?php echo link_to('Previous',$ssUrl.'/page/'.$pager->getPreviousPage());?>
</div>
<div class="pagination">	
<?php foreach($pager->getLinks() as $ss__pageNo):?>
	<?php if($ss__pageNo == $pager->getPage()):?>
		<?php echo $ss__pageNo;?>
	<?php else:?>
		<?php echo link_to($ss__pageNo,$ssUrl.'/page/'.$ss__pageNo);?>
	<?php endif;?>	
<?php endforeach;?>
</div>
<div class="pagination">
	<?php echo link_to('Next',$ssUrl.'/page/'.$pager->getNextPage());?>
</div>
<div class="pagination">	
	<?php echo link_to('Last',$ssUrl.'/page/'.$pager->getLastPage());?>
</div>	
		
