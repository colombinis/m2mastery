<?php

declare(strict_types=1);

namespace Sacsi\FirstPage\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\Result\Json;

/*
Deberia responder en la siguiente url
http://local.m2mastery/sacsi/page/
*/

class Index extends Action
{
    public function execute()
    {
        /**@var Json $jsonResult */
        $jsonResult = $this->resultFactory->create( ResultFactory::TYPE_JSON);
        $jsonResult->setData([
            'message' => 'Default action for specific controller ? ' .__METHOD__
        ]);
        
        return $jsonResult;
    }
}
