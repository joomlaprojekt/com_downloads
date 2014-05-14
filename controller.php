<?php
defined ( '_JEXEC' ) or die ();

class DownloadController extends JControllerLegacy {
	
	protected $default_view = 'downloads';
	
	public function display($cachable = false, $urlparams = false) {
		
		require_once JPATH_COMPONENT . '/helpers/download.php';
		
		$view = $this->input->get ( 'view', 'downloads' );
		$layout = $this->input->get ( 'layout', 'default' );
		$id = $this->input->getInt ( 'id' );
		
		if ($view == 'download' && $layout == 'edit' && ! $this->checkEditId ( 'com_download.edit.download', $id )) 
			{
			$this->setError ( JText::sprintf ( 'JLIB_APPLICATION_ERROR_UNHELD_ID', $id ) );
			$this->setMessage ( $this->getError (), 'error' );
			$this->setRedirect ( JRoute::_ ( 'index.php?option=com_download&view=Downloads', false ) );
					return false;
		}
		parent::display ();
		return $this;
	}
}
		
		
	