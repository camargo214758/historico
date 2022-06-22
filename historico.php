<?php
$host = 'localhost';
$user = 'root';
$passwd = '';
$bd_name = 'historico';

 $connx = mysqli_connect($host, $user ,$passwd, $bd_name);

 if($connx){
 echo 'conectou';
 }else{
    echo 'erro';
 }

// feito publicação
?>