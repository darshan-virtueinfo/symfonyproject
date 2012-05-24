<?php ob_start(); ?>
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
	public function executeReportType( $request)
  	{
  		$this->form = new ReportsTypeForm();
  	}
	public function executeReportDetail( $request)
  	{
  		$anRequest = $request->getParameter('reports');
  		
  		$this->snUserId = $snUserId = $anRequest['user_id'];
  		$this->snProjectId = $snProjectId = $anRequest['project_id'];
  		$this->snTaskId = $snTaskId = $anRequest['task_id'];
  		$this->snStartDate = $snStartDate = $anRequest['startdate'];
  		$this->snEndDate = $snEndDate = $anRequest['enddate'];
  		$this->bPagination = true ; 
  		
  		$this->reportsDetail = ReportsTable::getReportDetail($snUserId, $snProjectId, $snTaskId, $snStartDate, $snEndDate, $this->bPagination);
  		
  		if($this->bPagination == true) {
	  		$this->ssUrl = url_for('/backend.php/reports/reportDetail');
	  		
			// record per page
			$this->pager = new sfDoctrinePager('Reports', 5);
			$this->pager->setQuery($this->reportsDetail);
			// by default page number
			$this->pager->setPage($request->getParameter('page', 1));
			$this->pager->init();
  		}
  		
  		$asUser = Doctrine::getTable('User')->find($snUserId);
  		$ssFirstName = $asUser['firstname'];
  		$ssLastName =  $asUser['lastname'];
  		$this->ssUserName = $ssFirstName. " ".$ssLastName;  

  		$asProject = Doctrine::getTable('ProjectDetail')->find($snProjectId);	
  		$this->ssProjectName = $asProject['projectname'];
  		
  		$asTask = Doctrine::getTable('TaskType')->find($snTaskId);	
  		$this->ssTaskType = $asTask['tasktype'];		
  	}
  	
	public function executeExportCsv(sfWebRequest $request)
  	{	
    	$this->reportsDetail = ReportsTable::getReportDetail()->toArray();
    	
    	if($this->reportsDetail) {
	    	foreach($this->reportsDetail[0] as $ssFieldName => $ssFieldValue) {
	    		if(!is_array($ssFieldValue))
	    			echo $ssFieldName."\t";
	    	}
	    	echo "\n";
	  		foreach($this->reportsDetail as $key => $job) {
	  			foreach($job as $fieldname => $field) {
	  				if(!is_array($field)) {
	         		 	echo $field."\t";
	  				}
	  			}
	  			echo "\n";	
	    	}
    	}
  		
		$this->setLayout(false);
   		$this->getResponse()->clearHttpHeaders();
    	$this->getResponse()->setContentType("application/vnd.msexcel;charset=ISO-8859-1");
    	$this->getResponse()->setHttpHeader('CacheControl', 'must-revalidate, post-check=0, pre-check=0');
    	$this->getResponse()->setHttpHeader('Cache', '0');
    	$this->getResponse()->setHttpHeader('Content-Disposition', 'attachment;filename=' .  'csv'.date("Y-m-d") . ".csv");
    	$this->getResponse()->sendHttpHeaders();
		
    	return sfView::NONE;
    		  				
  	}
	public function executeImportCsv( $request)
  	{
  		$this->form = new TABLE2Form();
		unset($this->form['_csrf_token']);
		$asFileDetail = $request->getFiles($this->form->getName());
		
		$ssExtractPath = "/opt/lampp/htdocs/sfreports/web/uploads/import_csv";
		if($asFileDetail){
			$ssFileName = $asFileDetail['filename']['name'];
		 	$ssTempPath = $asFileDetail['filename']['tmp_name'];
		}
			
		if($request->isMethod('post')) {
	  		$this->form->bind($request->getParameter('table2'),$request->getFiles('table2'));
		   	if ($this->form->isValid()) {
		   		$zip = new ZipArchive;
		   		if ($zip->open($ssTempPath) === TRUE) {
					if(!is_dir($ssExtractPath)) {
						mkdir($ssExtractPath);
						chmod($ssExtractPath, 0777);	
					}
					$zip->extractTo($ssExtractPath.DIRECTORY_SEPARATOR);
					$zip->close();
					$ssFolderName = explode(".zip",$ssFileName);
					$ssPathName = $ssExtractPath.DIRECTORY_SEPARATOR.$ssFolderName[0];
					chmod($ssPathName, 0777 );
					$dir_handle  = opendir($ssPathName);
					$amFiles = $array = array();
					
		   			while (false !== ($ssExtractedFileName = readdir($dir_handle))) {
					 	if($ssExtractedFileName !== '.' && $ssExtractedFileName !== '..' && !in_array($ssExtractedFileName, $array)) {
							$amFiles[] = $ssExtractedFileName;
					 	}
					}
		   			$snTotalRow = $snInsertRow = $snDuplicateRow = $snTotalFile = 0;
		   			foreach($amFiles as $ssfiles) {
		   				$snRow = $snTotalFileRow = $snInsertFileRow = $snDuplicateFileRow = 0; 
		   				$bInsertResult = false;
				   		if (($handle = fopen($ssPathName."/".$ssfiles."", "r")) !== FALSE) {
				   			$amValuesData = array();
							while (($amFileRowData = fgetcsv($handle, 1000, ",")) !== FALSE) {
								if ($snRow > 0) {
									$snRow++; $snTotalRow++; $snTotalFileRow++;
									$amValueData = explode("\t",$amFileRowData[0]);
									foreach($amFieldsData as $snKey => $ssFieldName) {
										$amValuesData[$snRow][$ssFieldName] = $amValueData[$snKey];
									}
								} else {
									$amFieldsData = explode("\t",$amFileRowData[0]);
									$snRow++;
								}
							}
							
							foreach($amValuesData as $ssFielValue) {
								$ssDuplicateData = TABLE2Table::checkDuplicate($ssFielValue['begin_date'], $ssFielValue['end_date'], $ssFielValue['country_code']);
								if(empty($ssDuplicateData)){
									$this->reportsDetail = TABLE2Table::insertCsvDetail($ssFielValue);
									$snInsertRow++; $snInsertFileRow++;
								} else {
									$snDuplicateRow++;
									$snDuplicateFileRow++;
								}
							}
							$this->ssImportFileMessages = array();
							$ssImportFileMessages[] = "Total Inserted Row : ".$snInsertFileRow;
							$ssImportFileMessages[] = "Total Duplicated Row : ".$snDuplicateFileRow;
							$ssImportFileMessages[] = "Total No.Of Row : ". $snTotalFileRow;
							$this->ssImportFileMessages = $ssImportFileMessages;
							$snTotalFile++;
							fclose($handle);
				   		}
				   		
		   			}
		   			if($bInsertResult);
						$this->deleteDirectory($ssExtractPath);
					
					$this->getUser()->setFlash('total_file', 'Total No Of File In Folder : '.$snTotalFile);
					$this->getUser()->setFlash('total_row', 'Total No Of Rows In Folder : '.$snTotalRow);
					$this->getUser()->setFlash('total_insert', 'Total No Of Inserted  Row In Folder : '.$snInsertRow);
					$this->getUser()->setFlash('Duplicate_row', 'Total No Of Duplicated Row In Folder : '.$snDuplicateRow);	
		   		} else {
		   			echo "Please select zip folder only ";
		   		}	
		   	} 
		}				
  	}
  	
  	public function deleteDirectory($ssDirName) {
		if (!file_exists($ssDirName)) return true;
		if (!is_dir($ssDirName) || is_link($ssDirName)) return unlink($ssDirName);
	    foreach (scandir($ssDirName) as $item) {
			if ($item == '.' || $item == '..') continue;
		    if (!$this->deleteDirectory($ssDirName . "/" . $item)) {
		     	chmod($ssDirName . "/" . $item, 0777);
		        if (!$this->deleteDirectory($ssDirName . "/" . $item)) return false;
		    	};
			}
			return rmdir($ssDirName);
  	}
}