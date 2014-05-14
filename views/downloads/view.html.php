<?php
defined('_JEXEC') or die;
class DownloadViewDownloads extends JViewLegacy
{
	protected $items;
	public function display($tpl = null)
	{
		$this->items = $this->get('Items');
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}
		$this->addToolbar();
		parent::display($tpl);
		}
		protected function addToolbar()
		{
			$canDo = DownloadHelper::getActions();
			$bar = JToolBar::getInstance('toolbar');
			JToolbarHelper::title(JText::_('COM_DOWNLOAD_MANAGER_DOWNLOADS'), '');
			JToolbarHelper::addNew('download.add');
			if ($canDo->get('core.edit'))
			{
				JToolbarHelper::editList('download.edit');
			}
			if ($canDo->get('core.admin'))
			{
				JToolbarHelper::preferences('com_download');
			}
		}
		}