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
	{
		# code...
	}
}