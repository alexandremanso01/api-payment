<?php
class NotificationClass {
    
    public static function saveNotification($payment_info){
        //Salva a informação no banco de dados
        NotificationModel::save($payment_info);
    
    }
}