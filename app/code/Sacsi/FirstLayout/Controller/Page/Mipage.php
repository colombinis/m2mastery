<?php

declare(strict_types=1);

namespace Sacsi\FirstLayout\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\Result\Page;

/*
Deberia responder en la siguiente url
http://local.m2mastery/firstlayout/page/view
*/


class Mipage extends Action
{
    public function execute()
    {
        /** @var Page $page */
        $page = $this->resultFactory->create( ResultFactory::TYPE_PAGE);
        $block = $page->getLayout()->getBlock('sacsi.first.layout.example');

        //Seteamos valores que queremos obtener en nuestro bloque
        $block->setData('array1', ['uno','dos','tres']);
        $block->setData('parameter1', 'Data from the Controller for parameter1');

        return $page;
    }
}
