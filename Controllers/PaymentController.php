<?php

class PaymentController {
    public static function getPayments($colection_id){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.mercadopago.com/v1/payments/'.$colection_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => 'CURLOPT_HTTP_VERSION_1_1',
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '. $_ENV['ACCESS_TOKEN']
            )
        ));
        $payment_info = json_decode(curl_exec($curl), true);
        curl_close($curl);
        return $payment_info;
    }

    public static function generetePayment($unit_price, $quantity, $title, $external_reference){
        MercadoPago\SDK::setAccessToken($_ENV['ACCESS_TOKEN']);
        $preference = new MercadoPago\Preference();
        $item = new MercadoPago\Item();
        $item->title = $title;
        $item->quantity = $quantity;
        $item->unit_price = (double)$unit_price;
        $preference->items = array($item);
        $preference->back_urls = array(
            'success' =>  $_ENV['SITE_URL'] . '/success.php',
            'failure' =>  $_ENV['SITE_URL'] . '/failure.php',
            'pending' =>  $_ENV['SITE_URL'] . '/pending.php',
        );
        $preference->notification_url = $_ENV['SITE_URL'] . '/notification.php';
        $preference->external_reference = $external_reference;
        $preference->save();
        $link = $preference->init_point;
        header('Location:' . $link);
        die;
    }
}