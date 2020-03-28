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


class Otrapage extends Action
{
    public function execute()
    {
        return $this->resultFactory->create( ResultFactory::TYPE_PAGE);
    }
}
