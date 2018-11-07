<?php

namespace Omnipay\PayPalReference;

class ExpressGateway extends \Omnipay\PayPal\ExpressGateway
{
    public function getName()
    {
        return 'PayPal Express Reference';
    }

    public function createBillingAgreement(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PayPalReference\Message\CreateBillingAgreementRequest', $parameters);
    }

    public function doReferenceTransaction(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PayPalReference\Message\DoReferenceTransactionRequest', $parameters);
    }
}
