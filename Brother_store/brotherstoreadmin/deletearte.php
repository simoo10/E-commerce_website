<?php
include('db.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
 	$getid=$_GET['id'];
 	$recupart=$bdd->prepare('SELECT * FROM products_electronic WHERE productse_id=?');
 	$recupart->execute(array($getid));
 	if ($recupart->rowCount()>0) {
 		$deleteart=$bdd->prepare('DELETE FROM products_electronic WHERE productse_id=?');
 		$deleteart->execute(array($getid));
 		header('location:pubpe.php');
 	}else{
 		echo "no item found";
 	}
 }else{
 	echo "no id found";
 }
?>