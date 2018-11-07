<?php

namespace Omnipay\PayPalReference\Message;

use Omnipay\PayPal\Message\AbstractRequest;

/**
 * PayPal Express Authorize Request
 */
class CreateBillingAgreementRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('token');

        $data = $this->getBaseData();
        $data['METHOD'] = 'CreateBillingAgreement';
        $data['TOKEN'] = $this->getToken();

        return $data;
    }

    protected function createResponse($data)
    {
        return $this->response = new CreateBillingAgreementResponse($this, $data);
    }
}
