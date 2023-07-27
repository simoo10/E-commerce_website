
<?php
session_start(); 
include("includes/db.php");

if (!$_SESSION['UserName'] ) {
	header('location: login-register.php');
}
 ?>
 
<?php 

if(isset($_GET['productsw_id']) &!empty($_GET['productsw_id'])){
$productsw_id=$_GET['productsw_id'];
 $sql="INSERT INTO wishlist (productsw_id)VALUES('$productsw_id')";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$productsw_id=$row['productsw_id'];
if($res){
	header('location:wishlist.php');

}else{
	echo "already exist";
	header('location:wishlist.php');
}

}

 ?>
 <?php 

if(isset($_GET['products_id']) &!empty($_GET['products_id'])){
$products_id=$_GET['products_id'];
 $sql="INSERT INTO wishlist (products_id)VALUES('$products_id')";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$products_id=$row['products_id'];
if($res){
	header('location:wishlist.php');

}else{
	echo "already exist";
	header('location:wishlist.php');
}

}

 ?>
 <?php 
if(isset($_GET['productse_id']) &!empty($_GET['productse_id'])){
$productse_id=$_GET['productse_id'];
 $sql="INSERT INTO wishlist (productse_id)VALUES('$productse_id')";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$productse_id=$row['productse_id'];
if($res){
	header('location:wishlist.php');

}else{
	echo "already exist";
	header('location:wishlist.php');
}

}

 ?>