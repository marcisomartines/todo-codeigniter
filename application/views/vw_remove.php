<?php
require_once 'vw_init.php';

if(isset($_GET['as'], $_GET['item'])){
	$as=$_GET['as'];
	$item=$_GET['item'];
	switch($as){
		case 'remove':
			$doneQuery=$db->prepare("DELETE FROM items WHERE id= :item AND user= :user");
			$doneQuery->execute([
				'user'=>$_SESSION['user_id'],
				'item'=>$item
				]);
		break;
	}
}

header('Location: index');