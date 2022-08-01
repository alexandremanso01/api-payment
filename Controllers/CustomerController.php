<?php

class CustomerController {
    public static function create($customer){
        return CustomerModel::create($customer);
    }
}