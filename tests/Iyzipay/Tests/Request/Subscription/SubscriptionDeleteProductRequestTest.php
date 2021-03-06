<?php

namespace Iyzipay\Tests\Request\Subscription;

use Iyzipay\Request\Subscription\SubscriptionDeleteProductRequest;
use Iyzipay\Tests\TestCase;
use Iyzipay\Model\Locale;

class SubscriptionDeleteProductRequestTest extends TestCase
{
    public function test_should_get_json_object()
    {
        $request = $this->prepareRequest();
        $jsonObject = $request->getJsonObject();
        $this->assertEquals(Locale::TR, $jsonObject["locale"]);
        $this->assertEquals("123456789", $jsonObject["conversationId"]);
        $this->assertEquals("4594ca5c-75f6-425d-a673-2a1d19d534ba", $jsonObject["productReferenceCode"]);
    }

    public function test_should_get_json_string()
    {
        $request = $this->prepareRequest();
        $json = '
                {
                    "locale":"tr",
                    "conversationId":"123456789",
                    "productReferenceCode":"4594ca5c-75f6-425d-a673-2a1d19d534ba"
                }';

        $this->assertJson($request->toJsonString());
        $this->assertJsonStringEqualsJsonString($json, $request->toJsonString());
    }

    private function prepareRequest()
    {
        $request = new SubscriptionDeleteProductRequest();
        $request->setLocale("tr");
        $request->setConversationId("123456789");
        $request->setProductReferenceCode("4594ca5c-75f6-425d-a673-2a1d19d534ba");
        return $request;
    }
}
