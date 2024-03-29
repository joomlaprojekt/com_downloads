<?php
defined ( '_JEXEC' ) or die ();

class DownloadModelDownload extends JModelAdmin {
	protected $text_prefix = 'COM_DOWNLOAD';
	
	public function getTable($type = 'Download', $prefix = 'DownloadTable', $config = array()) {
		return JTable::getInstance ( $type, $prefix, $config );
	}
	
	public function getForm($data = array(), $loadData = true) {
		
		$app = JFactory::getApplication ();
		$form = $this->loadForm ( 'com_download.download', 'download', array (
				'control' => 'jform',
				'load_data' => $loadData 
		) );
		if (empty ( $form )) {
			return false;
		}
		return $form;
	}
	
	protected function loadFormData() {
		$data = JFactory::getApplication ()->getUserState ( 'com_download.edit.download.data', array () );
		if (empty ( $data )) {
			$data = $this->getItem ();
		}
		return $data;
	}
	protected function prepareTable($table) {
		$table->title = htmlspecialchars_decode ( $table->title, ENT_QUOTES );
	}
}