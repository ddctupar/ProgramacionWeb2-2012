<?php

require_once('../php/eDibujable.php');
require_once('../php/DBMMySqlAcces.php');
require_once('../php/Cliente.php');

$cliente = new Cliente;
$cliente->LogIn();
?>