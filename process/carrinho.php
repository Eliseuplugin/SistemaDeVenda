<?php 
error_reporting(E_PARSE);
include '../configurar/configServer.php';
include '../configurar/consulSQL.php';
session_start();
$suma = 0;
if (isset($_GET['preco'])) {
	$_SESSION['produto'][$_SESSION['contador']] = $_GET['preco'];
	$_SESSION['contador']++;
}

echo '<table class="table table-bordered">';
for ($i=0; $i < $_SESSION['contador'];$i++){
	$consulta=executarSQL::consultar("select * from produto where CodigoProd='".$_SESSION['produto'][$i]."'");
	while ($fila = mysql_fetch_array($consulta)) {
		echo "<tr><td>".$fila['NomeProd']."</td><td> ".$fila['Preco']."</td></tr>";
		$suma += $fila['Preco'];
	}
} 
	echo "<tr><td>Subtotal</td><td>$".number_format($suma,2)."</td></tr>";
	echo "</table>";
	$_SESSION['sumaTotal']=$suma;
