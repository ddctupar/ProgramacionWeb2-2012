<?php

require_once('../php/DBMMySqlAcces.php');

session_start();

//borrar el carrito y el listado

$id_cliente = $_GET['id'];

$db = new DBMySqlAcces;
$db->BorraListado($id_cliente);
$db->BorraCarrito($id_cliente);
session_destroy();

header ('Location: ../index.php');

?>