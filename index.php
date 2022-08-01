<?php
include('inc_head.php');

$_SESSION['hiddenKey'] = Functions::generateRandomString();

?>
<body>
    <div class="container mx-auto my-auto mt-4">
        <div>
            <h1>Formulário de Inscrição</h1>
        </div>    
        <div class="row">
            <div class="col-md-4">
                <form action="/api-payment/payment.php" method="post">
                    <input type="hidden" name="<?=$_SESSION['hiddenKey']?>" value="<?=$_SESSION['hiddenKey']?>" />
                    <div class="row mt-4">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="row mt-4">
                        <label for="fone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="phone" id="phone" maxlength="11"  minlength="11" required>
                    </div>
                    <div class="row mt-4">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" class="form-control" name="instagram" required>
                    </div>
                    <div class="row mt-4">
                        <label for="time_job" class="form-label">Tempo de Atuação na Área</label>
                        <input type="text" class="form-control" name="time_job" required>
                    </div>
                    <div class="row mt-4">
                        <input type="submit" class="btn btn-primary" value="Proximo >>">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.js"></script>
    <script>
        $(document).ready(function(){
            $("#phone").mask("(99) 9 9999-9999");
        });
    </script>
</body>
</html>