<?php
session_start();

$_SESSION['user_id'] = 1;


$db = new PDO ('mysql:dbname=todo;host=localhost','root','123456');

//manejando isso de algguma outra forma
if(!isset($_SESSION['user_id'])){
	die('Você não esta logado');
}