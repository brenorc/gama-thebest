<?php

$link = mysqli_connect("localhost", "root", "gogama", "db_projeto");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution

// Pegando dados do form

$nome = mysqli_real_escape_string($link, $_REQUEST['nome']);
$sobrenome = mysqli_real_escape_string($link, $_REQUEST['sobrenome']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$empresa = mysqli_real_escape_string($link, $_REQUEST['empresa']);


// data

date_default_timezone_set("America/Sao_Paulo");
$data = date("Y-m-d");
$hora = date("h:i:s");

//IP 

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}


 
// Insert

$sql = "INSERT INTO contato (nome, sobrenome, email, ipaddress, data, hora,empresa) VALUES ('$nome', '$sobrenome', '$email', '$ip', '$data', '$hora','$empresa' )";

if(mysqli_query($link, $sql)){
    	header('Location: index.php?'.$retorno_get);
		die();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Fecha conexão

mysqli_close($link);
?>