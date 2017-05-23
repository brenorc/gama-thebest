<?php 

require_once ('db.class.php');

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];

$objDb = new db();
$link = $objDb->conecta_mysql();
$sql = " insert into contato(nome,sobrenome,email) values('$nome','$sobrenome','$email') ";



$email_existe = false;


//verificar se o e-mail já
	$sql = " select * from contato where email = '$email' ";
	if($resultado_id = mysqli_query($link, $sql)) {

		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['email'])){
			$email_existe = true;
		} 
	} else {
		echo 'Erro ao tentar localizar o registro de email';
	}


if($email_existe){

		$retorno_get = '';

		if($email_existe){
			$retorno_get.= "erro_email=1&";
		}

		header('Location: index.php?'.$retorno_get);
		die();
	}

if(mysqli_query($link, $sql)){
		require_once("index.php");
	} else {
		echo 'Erro ao registrar o usuário!';
	}
 ?>