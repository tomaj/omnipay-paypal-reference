<?php

namespace Omnipay\PayPalReference\Message;

use Omnipay\PayPal\Message\AbstractRequest;

/**
 * PayPal Express Authorize Request
 */
class DoReferenceTransactionRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('referenceId', 'amount');

        $data = $this->getBaseData();
        $data['METHOD'] = 'DoReferenceTransaction';
        $data['REFERENCEID'] = $this->getParameter('referenceId');
        $data['AMT'] = $this->getAmount();
        $data['PAYMENTACTION'] = 'Sale';

        return $data;
    }

    protected function createResponse($data)
    {
        return $this->response = new CreateBillingAgreementResponse($this, $data);
    }
    
    public function setReferenceId($value)
    {
        return $this->setParameter('referenceId', $value);
    }
}
