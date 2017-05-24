<?php 

class db {
	
private $host ='localhost';

private $usuario ='root';

private $senha ='gogama';

private $database ='db_projeto';

public function conecta_mysql(){
	$con = mysqli_connect($this->host,$this->usuario,$this->senha,$this->database);

	mysqli_set_charset($con, 'utf8');

$sql = "INSERT INTO db_projeto (nome, sobrenome, email)
VALUES ('John', 'Doe', 'john@example.com')";

		if(mysqli_connect_errno()){
			echo 'Erro ao tentar se conectar com o BD MySQL: '.mysqli_connect_error();	
		}

		return $con;
	}

}

?>
