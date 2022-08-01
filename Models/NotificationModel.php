<?php

class NotificationModel{
    public static function save($payment_info){
        if(isset($payment_info['payment_method_id'])) {
            try {
                $pdo = Database::conexao();
                $cad = $pdo->prepare('INSERT INTO mp_payment (status, title, email, payment_method_id, external_reference, ip_address, collector_id) 
                                        VALUES (:status, :title, :email, :payment_method_id, :external_reference, :ip_address, :collector_id)');
                $cad->bindValue(':status', $payment_info['status']);
                $cad->bindValue(':title', $payment_info['additional_info']['items'][0]['title']);
                $cad->bindValue(':email', $payment_info['payer']['email']);
                $cad->bindValue(':payment_method_id', $payment_info['payment_method_id']);
                $cad->bindValue(':external_reference', $payment_info['external_reference']);
                $cad->bindValue(':ip_address', $payment_info['additional_info']['ip_address']);
                $cad->bindValue(':collector_id', $payment_info['id']);
                $cad->execute();
                return true;
            } catch (\Throwable $th) {
                Functions::saveLog(' Error: '. $th);
                return false;
            }
        }
    }
}