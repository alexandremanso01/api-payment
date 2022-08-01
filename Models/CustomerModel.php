<?php

class CustomerModel {
    public static function create($customer){
        try {
            $pdo = Database::conexao();
            $cad = $pdo->prepare('INSERT INTO mp_customers (name, phone, instagram, time_job, external_reference) 
                                    VALUES (:name, :phone, :instagram, :time_job, :external_reference)');
            $cad->bindValue(':name', $customer['name']);
            $cad->bindValue(':phone', $customer['phone']);
            $cad->bindValue(':instagram', $customer['instagram']);
            $cad->bindValue(':time_job', $customer['time_job']);
            $cad->bindValue(':external_reference', $customer['external_reference']);
            $cad->execute();
            return true;
        } catch (\Throwable $th) {
            Functions::saveLog(' Error: '. $th);
            return $th;
        }
    }
}