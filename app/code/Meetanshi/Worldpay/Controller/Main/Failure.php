<?php
namespace Meetanshi\Worldpay\Controller\Main;

use Magento\Checkout\Model\Session;
use Magento\Sales\Model\OrderFactory;

class Failure extends Apm
{
    public function execute()
    {
        $this->messageManager->addErrorMessage("Failed to process payment, please try again");
        $this->_redirect('checkout/cart');
    }
}
