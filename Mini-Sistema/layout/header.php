<?php
session_start();
if(!isset($_SESSION['nome'])) {
	header("Location: index.php?msg=Sessão expirada&tipo_msg=warning");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Loja ::OnTheLine::</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
</head>
<body>
