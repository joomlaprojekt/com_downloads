<?php
defined ( '_JEXEC' ) or die ();
class DownloadHelper {
	public static function getActions($categoryId = 0) {
		$user = JFactory::getUser ();
		$result = new JObject ();
		if (empty ( $categoryId )) {
			$assetName = 'com_download';
			$level = 'component';
		} else {
			$assetName = 'com_download.category.' . ( int ) $categoryId;
			$level = 'category';
		}
		$actions = JAccess::getActions ( 'com_download', $level );
		foreach ( $actions as $action ) {
			$result->set ( $action->name, $user->authorise ( $action->name, $assetName ) );
		}
		return $result;
	}
}