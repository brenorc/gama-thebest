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


// Pegando a data

date_default_timezone_set("America/Sao_Paulo");
$data = date("Y-m-d");
$hora = date("h:i:s");

//Pegando o IP do cabra

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
 
// Inserir no banco

$sql = "INSERT INTO contato (nome, sobrenome, email, ipaddress, data, hora) VALUES ('$nome', '$sobrenome', '$email', '$ip', '$data', '$hora')";

if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Fecha conexão

mysqli_close($link);
?>