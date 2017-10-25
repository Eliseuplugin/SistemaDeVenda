<?php 
error_reporting();
include '../configurar/configServer.php';
include '../configurar/consulSQL.php';
$num=$_POST['clien-number'];
if ($num=='notlog') {
	$nameClien=$_POST['clien-name'];
	$passClien= md5($_POST['clien-pass']);
}
if ($num=='log') {
	$nameClien=$_POST['clien-name'];
	$passClien=$_POST['clien-pass'];
}
sleep(3);

$verdata= executarSQL::consultar("select * from cliente where Chave='".$passClien."'and Nome='".$nameClien."'");
$num= mysql_num_rows($verdata);
if ($num>0) {
	if ($_SESSION['sumaTotal']>0) {
		
		$data= mysql_fetch_array($verdata);
		$nuitC=$data['NUIT'];
		$StatusV="Pendente";

		// Inserindo dados em uma tabela de venda

		consultasSQL::InsertSQL("venda", "Data, NUIT, Desconto, TotalPagar, Status", "'".date('d-m-Y')."','".$nuitC."','0','".$_SESSION['sumaTotal']."','".$StatusV."'");

		// Recuperacao do numero de pedido atual
		$verId=executarSQL::consultar("select * from venda where NUIT='$nuitC' order by NumPedido desc limit 1");
		while ($fila=mysql_fetch_array($verId)) {
			$NumPedido=$fial['NumPedido'];
		}
	}
}