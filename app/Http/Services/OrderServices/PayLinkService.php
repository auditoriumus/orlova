<?php

namespace App\Http\Services\OrderServices;

use Illuminate\Http\Request;

class PayLinkService
{
    public function generate(Request $request)
    {
        $result = [];

        $email = $request->input('email');

        $shopId = env('SHOP_ID');
        //$pwd1 = env('SHOP_PWD_1');
        $pwd1 = env('SHOP_TEST_PWD_1');

        // номер заказа
        $invoiceId = random_int(12345, 54321);

        $in_curr = "";
        $shp_item = 1;

        // описание заказа
        $description = $request->input('description');
        $description .= '. Заказ №' . $invoiceId;

        //сумма
        $amount = $request->input('price');
        $amount = 1;

        //язык
        $culture = "ru";

        // кодировка
        $encoding = "utf-8";

        //подпись
        $crc = md5("$shopId:$amount:$invoiceId:$pwd1");


        $result['invoice_id'] = $invoiceId;
        $result['url'] = "https://auth.robokassa.ru/Merchant/Index.aspx?MerchantLogin=$shopId&OutSum=$amount&InvId=$invoiceId" .
            "&Description=$description&Email=$email&SignatureValue=$crc&Culture=$culture&Encoding=$encoding&isTest=1";

        return $result;
    }
}
