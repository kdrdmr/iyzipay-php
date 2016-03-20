<?php

namespace Iyzipay\Tests;

use Iyzipay\Model\PaymentPostAuth;
use Iyzipay\Request\CreatePaymentPostAuthRequest;

class PaymentAuthPostTest extends IyzipayResourceTestCase
{
    public function test_should_post_auth_payment()
    {
        $this->expectHttpPost();

        $paymentPostAuth = PaymentPostAuth::create(new CreatePaymentPostAuthRequest(), $this->options);

        $this->verifyResource($paymentPostAuth);
    }
}