<?php

namespace Omnipay\PayPalReference\Message;

use Omnipay\PayPal\Message\Response;

class CreateBillingAgreementResponse extends Response
{
    public function isSuccessful()
    {
        return !empty($this->data['BILLINGAGREEMENTID']);
    }

    public function getBillingAgreementId()
    {
        return isset($this->data['BILLINGAGREEMENTID']) ? $this->data['BILLINGAGREEMENTID'] : null;
    }
}
