<?php

declare(strict_types=1);

namespace Sacsi\FirstPage\Controller\OtraPage;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\Result\Json;

class View extends Action
{
    public function execute()
    {
        /**@var Json $jsonResult */
        $jsonResult = $this->resultFactory->create( ResultFactory::TYPE_JSON);
        $jsonResult->setData([
            'message' => 'Hola desde el controller ' .__METHOD__
        ]);
        
        return $jsonResult;
    }
}
