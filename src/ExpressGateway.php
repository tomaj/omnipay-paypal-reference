<?php

namespace Omnipay\PaypalReference;

use Omnipay\Common\AbstractGateway;

class ExpressGateway extends AbstractGateway
{
    public function getName()
    {
        return 'Paypal Reference';
    }

    public function createBillingAgreement(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PayPal\Message\CreateBillingAgreementRequest', $parameters);
    }

    public function doReferenceTransaction(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PayPal\Message\DoReferenceTransactionRequest', $parameters);
    }
}
