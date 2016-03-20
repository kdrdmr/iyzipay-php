<?php

namespace Iyzipay\Tests;

use Iyzipay\Model\CrossBookingFromSubMerchant;
use Iyzipay\Request\CreateCrossBookingRequest;

class CrossBookingFromSubMerchantTest extends IyzipayResourceTestCase
{
    public function test_should_cross_booking_from_sub_merchant()
    {
        $this->expectHttpPost();

        $crossBookingFromSubMerchant = CrossBookingFromSubMerchant::create(new CreateCrossBookingRequest(), $this->options);

        $this->verifyResource($crossBookingFromSubMerchant);
    }
}