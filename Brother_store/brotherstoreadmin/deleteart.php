<?php
include('db.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
 	$getid=$_GET['id'];
 	$recupart=$bdd->prepare('SELECT * FROM products WHERE products_id=?');
 	$recupart->execute(array($getid));
 	if ($recupart->rowCount()>0) {
 		$deleteart=$bdd->prepare('DELETE FROM products WHERE products_id=?');
 		$deleteart->execute(array($getid));
 		header('location:pubpm.php');
 	}else{
 		echo "no item found";
 	}
 }else{
 	echo "no id found";
 }
?>