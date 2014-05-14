<?php
//Kein Direktzugriff
defined('_JEXEC') or die;

if (!JFactory::getUser() ->authorise('core.manage', 'com_download'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

//erzeugen eines Controller Objektes
$controller = JControllerLegacy::getInstance('Download');

//Ausführen der Benutzeranfrage
$controller->execute(JFactory::getApplication()->input->get('task'));

//Falls gesetzt, Weiterleitung ausführen
$controller->redirect();
?>