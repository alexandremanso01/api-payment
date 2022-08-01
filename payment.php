<?php
include('inc_head.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST[$_SESSION['hiddenKey']]) && $_POST[$_SESSION['hiddenKey']] === $_SESSION['hiddenKey']) {
        $name = (isset($_POST['name'])) ? trim($_POST['name']) : null;
        $phone = (isset($_POST['phone'])) ? trim($_POST['phone']) : null;
        $intagram = (isset($_POST['instagram'])) ? trim($_POST['instagram']) : null;
        $time_job = (isset($_POST['time_job'])) ? trim($_POST['time_job']) : null;
        if (!empty($name) && !empty($phone) && !empty($intagram) && !empty($time_job)) {
            $external_reference = Functions::generaterRandonNumber();
            $customer = [
                'name' => $_POST['name'],
                'phone' => $_POST['phone'],
                'instagram' => $_POST['instagram'],
                'time_job' => $_POST['time_job'],
                'external_reference' => $external_reference,
            ];
            $customer_create = CustomerController::create($customer);
            if($customer_create){
                PaymentController::generetePayment(1.00, 1, 'Consultoria', $external_reference);
            }else{
                var_dump($customer_create);
                exit;
            };
        } else {
            echo 'Por favor, preencha todos os dados.';
        }
    } else {
        echo 'Ops, algo deu errado. Tente novamente.';
    }
}
$_SESSION['hiddenKey'] = sha1(rand());