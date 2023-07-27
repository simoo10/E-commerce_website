<?php
include('db.php');
if (isset($_GET['id']) and !empty($_GET['id'])) {
 	$getid=$_GET['id'];
 	$recupart=$bdd->prepare('SELECT * FROM products_women WHERE productsw_id=?');
 	$recupart->execute(array($getid));
 	if ($recupart->rowCount()>0) {
 		$deleteart=$bdd->prepare('DELETE FROM products_women WHERE productsw_id=?');
 		$deleteart->execute(array($getid));
 		header('location:pubpw.php');
 	}else{
 		echo "no item found";
 	}
 }else{
 	echo "no id found";
 }
?>