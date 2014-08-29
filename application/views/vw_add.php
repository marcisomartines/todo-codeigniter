<?php
require_once 'vw_init.php';

if(isset($_POST['name'])){
	$name = trim($_POST['name']);//elimina espaços em branco nas extremidades

	if(!empty($name)){
		$adicionaQuery=$db->prepare("INSERT INTO  items (name,user,done,created)
			VALUES (:name,:user,0,NOW())");
		$adicionaQuery->execute([
			'name'=>$name,
			'user'=>$_SESSION['user_id']
		]);
	}
}

header('Location: index');