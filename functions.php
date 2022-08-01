<?php 

class Functions{

    public static function saveLog($log){
        $hora = date("H:i:s"); // pega a hora
        $data = date("d-m-Y"); // pega o dia       
        $log = fopen("logs/".$data.".txt", "a+");
        $escreve = fwrite($log, $hora." - ". $log);// Escreve
        fclose($log); // Fecha o arquivo;
    }



    //Função para gerar código randômico em Numeros.
    public static function generaterRandonNumber(){
        $reduce = substr(date('YmdHis', time()), 2);
        $arr_date = str_split($reduce);
        $arr1 = str_split("cdefgab");
        $randomNumber = "";
        for($i = 0; $i<12; $i++){
            $randomNumber .= $arr1[rand(0, 6)];
            $randomNumber .= $arr_date[$i];
        }
        return $randomNumber;
    }

    //Função para gerar código randômico em String.
    public static function generateRandomString($length = 15) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++)
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        return $randomString;
    } 
}
?>