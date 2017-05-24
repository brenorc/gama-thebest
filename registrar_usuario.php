<?php 

require_once ('db.class.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$timestamp = mktime(date("H")-3, date("i"), date("s"));
$hora = gmdate("H:i:s", $timestamp);
$data = date('Y-m-d');

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    return $ip;
}
$ipaddress = getUserIP();

$objDb = new db();
$link = $objDb->conecta_mysql();
$sql = " insert into contato(nome,sobrenome,email, data, hora) values('$nome','$sobrenome','$email', '$data', '$hora') ";


if(mysqli_query($link, $sql)){
		require_once("index.php");
	} else {
		echo 'Erro ao registrar o usuário!';
	}
 ?>