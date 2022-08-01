<?php

    include('siteConfig.php');

    if(isset($_REQUEST["id"])){
        try {
            $colection_id = $_REQUEST["id"];
            //Consulta Api de Pagamento do Mercado Pago
            $payment_info = PaymentController::getPayments($colection_id, $_ENV['ACCESS_TOKEN']);

            //Salva a notificação retornada no Mercado Pago no banco de dados
            NotificationClass::saveNotification($payment_info);
        } catch (\Throwable $th) {
            //Salva Log em caso de erro
            Functions::saveLog($_REQUEST . ' Error: '. $th);
        }
    }else{
        //Salva Log
       Functions::saveLog($_REQUEST);
    }
?>