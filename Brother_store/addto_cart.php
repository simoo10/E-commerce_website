<?php include("includes/db.php"); ?>
<?php 
if(isset($_GET['productsw_id']) &!empty($_GET['productsw_id'])){
$productsw_id=$_GET['productsw_id'];
 $sql="INSERT INTO cart (productsw_id)VALUES('$productsw_id')";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$productsw_id=$row['productsw_id'];
if($res){
	header('location:cart.php');

}else{

	echo "already exist";
	header('location:cart.php');
}

}

 ?>
 <?php 
if(isset($_GET['products_id']) &!empty($_GET['products_id'])){
$products_id=$_GET['products_id'];
 $sql="INSERT INTO cart (products_id)VALUES('$products_id')";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$products_id=$row['products_id'];
if($res){
	header('location:cart.php');

}else{

	echo "already exist";
	header('location:cart.php');
}

}

 ?>
 <?php 
if(isset($_GET['productse_id']) &!empty($_GET['productse_id'])){
$productse_id=$_GET['productse_id'];
 $sql="INSERT INTO cart (productse_id)VALUES('$productse_id')";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);
$productse_id=$row['productse_id'];
if($res){
	header('location:cart.php');

}else{

	echo "already exist";
	header('location:cart.php');
}

}

 ?>