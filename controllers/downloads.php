<?php
defined ( '_JEXEC' ) or die ();

//Controller für die List-View der Download Einträge
class DownloadControllerDownloads extends JControllerAdmin {
	
	public function getModel($name = 'Download', $prefix = 'DownloadModel', $config = array('ignore_request' => true)) {

		$model = parent::getModel ( $name, $prefix, $config );
		
		return $model;
	}
}