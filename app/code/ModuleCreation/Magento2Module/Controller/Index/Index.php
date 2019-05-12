<?php

namespace ModuleCreation\Magento2Module\Controler\Index;

use Magento\Framework\App\Action\Action;


class Index extends Action 
{

	public fuction execute()
	{	
		/** @var \Magento\Framework\View\Result\Page $page */
		$page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
		return $page;
	}
}