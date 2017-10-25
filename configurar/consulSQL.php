<?php

/**
* 
*/
class executarSQL {
	
	public static function conectar()
	{
		if (!$con= mysql_connect(SERVER,USER,PASS)) {
			die("Erro com o servidor, verifique os seus dados");
		}
		if (!mysql_select_db(BD)) {
			die("Erro ao conectar com a base de dados, verifique o nome da sua base de dados");
		}
		// Codificar a informacao da base de dados a UTF8
		mysql_set_charset('utf8', $con);
		return $con;
	}
	public static function consultar($query) {
		if (!$consul = mysql_query($query, executarSQL::conectar())) {
			die(mysql_error(). 'Erro na consulta SQL executada');
		}
		return $consul;
		}
	
}
// Classe para fazer as consultas, inserir, eliminar e atualizar

/**
* 
*/
class consultasSQL{
	
  public static	function InsertSQL($tabela, $campo, $valores) {
  	if (!$consul = executarSQL::consultar("insert into $tabela ($campos) VALUES($valores)")) {
  		die("Ocorreu um erro em inserir os dados na tabela $tabela");
  	}
  	return $consul;
  }
  public static function DeleteSQL($tabela, $condicao) {
  	if (!$consul = executarSQL::consultar("delete from $tabela where $condicao")) {
  		die("Ocorreu um erro em eliminar os registros da tabela");
  	}
  	return $consul;
  }
	
}