<?php

require_once('../IyzipayBootstrap.php');
require_once('Sample.php');

IyzipayBootstrap::init();

$sample = new PostAuthSample();
$sample->should_post_auth();

class PostAuthSample
{
    public function should_post_auth()
    {
        # create request class
        $request = new \Iyzipay\Request\CreatePaymentPostAuthRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId("123456789");
        $request->setPaymentId("29");
        $request->setIp("127.0.0.1");

        # make request
        $paymentPostAuth = Iyzipay\Model\PaymentPostAuth::create($request, Sample::options());

        # print result
        print_r($paymentPostAuth);

    }
}
