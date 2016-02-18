<?php

use Iyzipay\Model\ApiTest;

require_once('../IyzipayBootstrap.php');
require_once('Sample.php');

IyzipayBootstrap::init();

$sample = new ApiTestSample();
$sample->should_test_api();

class ApiTestSample
{
    public function should_test_api()
    {
        # create request class
        $iyzipayResource = ApiTest::retrieve(Sample::options());

        #print result
        print_r($iyzipayResource);
    }
}