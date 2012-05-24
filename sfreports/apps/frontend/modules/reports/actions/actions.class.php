<?php

/**
 * reports actions.
 *
 * @package    ProjectManagment
 * @subpackage reports
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
sfProjectConfiguration::getActive()->loadHelpers(array('Url', 'Tag', 'I18N', 'Asset','Partial','Text','JavascriptBase'));
class reportsActions extends sfActions
{
	
    /**
  	* Executes index action
  	*
  	* @param sfRequest $request A request object
  	*/
  	public function executeIndex(sfWebRequest $request)
  	{ 
    	//$this->forward('default', 'module');
  	}
  	
  	public function executeAddreportdetail( $request)
  	{
  		$this->snSessionId = $this->getUser()->getAttribute('id', '', 'client');
  		$this->ssUrl = url_for('reports/addreportdetail');
  		if($this->hasRequestParameter('id')) {
  			$this->snReportId = $this->getRequestParameter('id');
  			$oReport = Doctrine::getTable('Reports')->find($this->snReportId);
  				$this->form = new ReportsForm($oReport, array('snSessionId' => $this->snSessionId));
  				$this->ssUrl .= '/id/'.$this->snReportId;
  		} else {
  			$this->form = new ReportsForm('', array('snSessionId' => $this->snSessionId));
  		}
  		
   		unset($this->form['_csrf_token']);
  		if($request->isMethod('post')) {
	  		$this->form->bind($request->getParameter('reports'),$request->getFiles('reports'));
		   	if ($this->form->isValid()) {
				$this->form->save();
			    if(!empty($this->snReportId))
			    	$this->getUser()->setFlash('success_flash_msg', 'Report Detail Edited Successfully');
			    else
			    	$this->getUser()->setFlash('success_flash_msg', 'Report Detail Added Successfully');		
				$this->redirect('reports/UserReportDetail');
			}
		}
  	}
  	
  	public function executeUserReportDetail( $request)
  	{
  		$this->snSessionId = $snUserId = $this->getUser()->getAttribute('id', '', 'client');
  		
  		if($this->snSessionId)
  			$this->asUserReportDetial = ReportsTable::getUserReportDetail($snUserId);
  			
  		 $this->ssUrl = url_for('/reports/UserReportDetail');	
		 // record per page
		 $this->pager = new sfDoctrinePager('Reports', 5);
		 $this->pager->setQuery($this->asUserReportDetial);
		 // by default page number
		 $this->pager->setPage($request->getParameter('page', 1));
		 $this->pager->init(); 				
  	}
  	public function executeUserReport( $request)
  	{
  		$this->form = new ReportsTypeForm();
  	}
  	public function executeUserReportList( $request)
  	{
  		$snUserId = $this->getUser()->getAttribute('id', '', 'client');
  		$anRequest = $request->getParameter('reports');
  		$this->snProjectId = $snProjectId = $anRequest['project_id'];
  		$this->snTaskId = $snTaskId = $anRequest['task_id'];
  		$this->snStartDate = $snStartDate = $anRequest['startdate'];
  		$this->snEndDate = $snEndDate = $anRequest['enddate'];
  		
  		$asProject = Doctrine::getTable('ProjectDetail')->find($snProjectId);	
  		$this->ssProjectName = $asProject['projectname'];
  		
  		$asTask = Doctrine::getTable('TaskType')->find($snTaskId);	
  		$this->ssTaskType = $asTask['tasktype'];
  		
		$this->bPagination = false ;
  		
  		$this->reportsDetail = ReportsTable::getReportDetail($snUserId, $snProjectId, $snTaskId, $snStartDate, $snEndDate, $this->bPagination);
  		
  		if($this->bPagination == true) {
	  		$this->ssUrl = url_for('/reports/userReportList');	
			// record per page
			$this->pager = new sfDoctrinePager('Reports', 5);
			$this->pager->setQuery($this->reportsDetail);
			// by default page number
			$this->pager->setPage($request->getParameter('page', 1));
			$this->pager->init();
  		}	
  	}
  	
}