<?php include("includes/db.php"); ?>
<?php 
if(isset($_GET['productsw_id']) &!empty($_GET['productsw_id'])){
$productsw_id=$_GET['productsw_id'];
echo $sql=" DELETE FROM wishlist WHERE productsw_id = $productsw_id ";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$productsw_id=$row['productsw_id'];
if($res){
	header('location:wishlist.php');
}
}else{
	// echo"not inserted";
	
	header('location:wishlist.php');
}

 ?>
 <?php 
if(isset($_GET['products_id']) &!empty($_GET['products_id'])){
$products_id=$_GET['products_id'];
echo $sql=" DELETE FROM wishlist WHERE products_id = $products_id ";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$products_id=$row['products_id'];
if($res){
	header('location:wishlist.php');
}
}else{
	// echo"not inserted";
	
	header('location:wishlist.php');
}

 ?>
 <?php 
if(isset($_GET['productse_id']) &!empty($_GET['productse_id'])){
$productse_id=$_GET['productse_id'];
echo $sql=" DELETE FROM wishlist WHERE productse_id = $productse_id ";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$productse_id=$row['productse_id'];
if($res){
	header('location:wishlist.php');
}
}else{
	// echo"not inserted";
	
	header('location:wishlist.php');
}
?>
<?php
if(isset($_GET['productse_id']) &!empty($_GET['productse_id'])){
	$productse_id=$_GET['productse_id'];
	echo $sql=" DELETE FROM wishlist WHERE productse_status = 0 AND date_signed_up>DATE_SUB((NOW), INTERVAL 1 MINUTE); ";
	$res=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($res);
	$productse_id=$row['productse_id'];
}

 ?>