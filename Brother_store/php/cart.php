<?php include("includes/db.php"); ?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Brother Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo-site-menu.png " >
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
     <!-- header-->
    <?php include("header.php"); ?>
            <!-- End Cart Panel -->
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/25.jpg) no-repeat scroll center right / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Cart</h2>
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor">/</span>
                                  <span class="breadcrumb-item active" style="color: red;">Cart</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--120 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <form method="post" action="cart.php" enctype="multipart/form-data">
    <table width="780px" align="center" style="padding-top:5px">
    <tr><td><b><font size="5px">Remove</font></b></td>
    <td><b><font size="5px">Products</font></b></td>
    <td><b><font size="5px">Quantity</font></b></td>
    <td><b><font size="5px">Total Price</font></b></td>
    </tr>
    <tr>
    </tr>
    <tr>
    </tr>
    <tr>
    </tr>
    <tr>
    </tr>
    <tr>
    </tr>
    <tr> </form>
                                    </thead>
                                    <tbody>
                                                <?php
if(isset($_GET['editq']))
{
    
    $id=$_GET['editq'];
    
?>

<tr><form action="" method="post">
<input type="text" name="qty1" placeholder="Enter Quantity" style="width: 500px;"/>
<div>
                            <select name="size" class="form-control" style="width: 500px;"  >
                                <option>select a size</option>
                                <?php
                                $get_p_cats="select * from size";
                                $run_p_cats=mysqli_query($con,$get_p_cats);
                                while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
                                    
                                    $size=$row_p_cats['size'];
                                    
                                    echo "<option  value='$size'>$size</option>";
                                    

                                }

                                ?>
                            </select>
                        </div>
                        <input type="submit" name="submit" value="Update Quantity and size"/>
</form><tr>
<?php
$sql="select * from products_women where amount";
$runres=mysqli_query($con,$sql);
$res=mysqli_fetch_array($runres);
$oldamount=$res['amount'];
if(isset($_POST['submit']))
{
    if ($_POST['qty1']<$res['amount']  ) {
        
        $q=$_POST['qty1'];
    $size=$_POST['size'];
    $update="update cart set qty='$q',size='$size' where productsw_id='$id'";
    $amount=$oldamount - $q;
    $updateq="update products_women set amount='$amount' where productsw_id='$id'";
    $runne=mysqli_query($con,$updateq);
    $run=mysqli_query($con,$update);

    echo "<script>alert('Quantity updated')</script>";
    echo "<script>window.open('cart.php','_self')</script>"; }
    else{
        echo "<script>alert('Quantity or size not exist')</script>";
    echo "<script>window.open('cart.php','_self')</script>";
    }
}
}?> 
<?php
if(isset($_GET['editqm']))
{
    $id=$_GET['editqm'];
    
?>
<form action="" method="post">
<input type="text" name="qty1" placeholder="Enter Quantity"/>
<input type="submit" name="submit" value="Update Quantity"/>
<div>
                            <select name="size" class="form-control" style="width: 1400px;"  >
                                <option>select a size</option>
                                <?php
                                $get_p_cats="select * from size";
                                $run_p_cats=mysqli_query($con,$get_p_cats);
                                while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
                                    $products_id=$row_p_cats['products_id'];
                                    $size=$row_p_cats['size'];
                                    
                                    echo "<option  value='$size'>$size</option>";
                                    

                                }

                                ?>
                            </select>
                        </div>
</form>
<?php
$sql="select * from products where amount";
$runres=mysqli_query($con,$sql);
$res=mysqli_fetch_array($runres);
$oldamount=$res['amount'];
if(isset($_POST['submit']))
{
    if ($_POST['qty1']<$res['amount']  ) {
        
        $q=$_POST['qty1'];
    $size=$_POST['size'];
    $update="update cart set qty='$q',size='$size' where products_id='$id'";
    $amount=$oldamount - $q;
    $updateq="update products set amount='$amount' where products_id='$id'";
    $runne=mysqli_query($con,$updateq);
    $run=mysqli_query($con,$update);
    echo "<script>alert('Quantity updated')</script>";
    echo "<script>window.open('cart.php','_self')</script>"; }
    else{
        echo "<script>alert('Quantity or size not exist')</script>";
    echo "<script>window.open('cart.php','_self')</script>";
}
}
}?>
<?php
if(isset($_GET['editqe']))
{
    $id=$_GET['editqe'];
    
?>
<form action="" method="post">
<input type="text" name="qty1" placeholder="Enter Quantity"/>
<input type="submit" name="submit" value="Update Quantity"/>
<div>
                            <select name="size" class="form-control" style="width: 1400px;"  >
                                <option>select a size</option>
                                <?php
                                $get_p_cats="select * from size";
                                $run_p_cats=mysqli_query($con,$get_p_cats);
                                while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
                                    $productse_id=$row_p_cats['productse_id'];
                                    $size=$row_p_cats['size'];
                                    
                                    echo "<option  value='$size'>$size</option>";
                                    

                                }

                                ?>
                            </select>
                        </div>
</form>
<?php
$sql="select * from products_electronic where amount";
$runres=mysqli_query($con,$sql);
$res=mysqli_fetch_array($runres);
$oldamount=$res['amount'];
if(isset($_POST['submit']))
{
    if ($_POST['qty1']<$res['amount']  ) {
        
        $q=$_POST['qty1'];
    $size=$_POST['size'];
    $update="update cart set qty='$q',size='$size' where productse_id='$id'";
    $amount=$oldamount - $q;
    $updateq="update products_electronic set amount='$amount' where productse_id='$id'";
    $runne=mysqli_query($con,$updateq);
    $run=mysqli_query($con,$update);
    echo "<script>alert('Quantity updated')</script>";
    echo "<script>window.open('cart.php','_self')</script>"; }
    else{
        echo "<script>alert('Quantity or size not exist')</script>";
    echo "<script>window.open('cart.php','_self')</script>";
    }
}
}?>

                                        
                                     <?php
    $total=0;
    
    $qry="select * from cart where productsw_id";
     $run1=mysqli_query($con,$qry);
     while($record=mysqli_fetch_array($run1))
     {
         $productsw_id=$record['productsw_id'];
         $qty1=$record['qty'];
         $size=$record['size'];
         if($qty1==0)
            $qty1=1; 
         $pro_price="select * from products_women where productsw_id='$productsw_id'";
         $run2=mysqli_query($con,$pro_price);
         while($p_price=mysqli_fetch_array($run2))
         {
             
             
             $only_price=$p_price['productsw_price'];
             $product_title=$p_price['productsw_title'];
             $product_img=$p_price['productsw_img1'];
             $tot_price=$only_price*$qty1;
             $product_price=array($tot_price);
             $values=array_sum($product_price);
             $total+=$values;
             ?>
    <tr>
    <td class='product-remove'><a href='deletecart.php?productsw_id=<?php echo $productsw_id ?>'>×</a></td>
    <td><?php echo "<font size='4px'><b>$product_title</b></font>"?><br><img src="brotherstoreadmin/images/product-details/<?php echo $product_img; ?>" style="width: 120px;height: 140px;" alt="small-image"></td>
    <td><?php echo "quantity:$qty1<br> size:$size "; ?> <br><br>

    <a href="cart.php?editq=<?php echo $productsw_id;?>">Edit Quantity and Size</a> </td>


     <td><?php echo "<font size='4px'><b>$ $tot_price</b></font>";  
    $updatep="update cart set total_price='$tot_price' where productsw_id='$productsw_id'";
    $runnp=mysqli_query($con,$updatep);

     ?></td>
    </tr>
     <?php }}?>

                                     <?php

    
    $qry="select * from cart where products_id";
     $run1=mysqli_query($con,$qry);
     while($record=mysqli_fetch_array($run1))
     {
         $products_id=$record['products_id'];
         $qty1=$record['qty'];
         $size=$record['size'];
         if($qty1==0)
            $qty1=1; 
         $pro_price="select * from products where products_id='$products_id'";
         $run2=mysqli_query($con,$pro_price);
         while($p_price=mysqli_fetch_array($run2))
         {
             
             
             $only_price=$p_price['products_price'];
             $product_title=$p_price['products_title'];
             $product_img=$p_price['products_img1'];
             $tot_price=$only_price*$qty1;
             $product_price=array($tot_price);
             $values=array_sum($product_price);
             $total+=$values;
             ?>
    <tr>
    <td class='product-remove'><a href='deletecart.php?products_id=<?php echo $products_id ?>'>×</a></td>
    <td><?php echo "<font size='4px'><b>$product_title</b></font>"?><br><img src="brotherstoreadmin/images/product-details-men/<?php echo $product_img; ?>" style="width: 120px;height: 140px;" alt="small-image"></td>
    <td><?php echo "quantity:$qty1<br> size:$size "; ?><br><br>
    <a href="cart.php?editqm=<?php echo $products_id;?>">Edit Quantity and Size</a> </td>
     <td><?php echo "<font size='4px'><b>$ $tot_price</b></font>";
     $updatep="update cart set total_price='$tot_price' where products_id='$products_id'";
    $runnp=mysqli_query($con,$updatep);

      ?></td>
    </tr>
     <?php }}?>
       <?php
    $qry="select * from cart where productse_id";
     $run1=mysqli_query($con,$qry);
     while($record=mysqli_fetch_array($run1))
     {
         $productse_id=$record['productse_id'];
         $qty1=$record['qty'];
         $size=$record['size'];
         if($qty1==0)
            $qty1=1; 
         $pro_price="select * from products_electronic where productse_id='$productse_id'";
         $run2=mysqli_query($con,$pro_price);
         while($p_price=mysqli_fetch_array($run2))
         {
             
             
             $only_price=$p_price['products_price'];
             $product_title=$p_price['products_title'];
             $product_img=$p_price['products_img1'];
             $tot_price=$only_price*$qty1;
             $product_price=array($tot_price);
             $values=array_sum($product_price);
             $total+=$values;
             ?>
    <tr>
    <td class='product-remove'><a href='deletecart.php?productse_id=<?php echo $productse_id ?>'>×</a></td>
    <td><?php echo "<font size='4px'><b>$product_title</b></font>"?><br><img src="brotherstoreadmin/images/product-details-electronic/<?php echo $product_img; ?>" style="width: 120px;height: 140px;" alt="small-image"></td>
    <td><?php echo "quantity:$qty1<br> size:$size "; ?><br><br>
    <a href="cart.php?editqe=<?php echo $productse_id;?>">Edit Quantity and Size</a> </td>
    
     <td><?php echo "<font size='4px'><b>$ $tot_price</b></font>";
$updatep="update cart set total_price='$tot_price' where productse_id='$productse_id'";
    $runnp=mysqli_query($con,$updatep);
     ?></td>
    </tr>
     <?php }}?>

     <tr align="right">
     <td colspan="3" align="right"><font size='5px'><b>Sub Total :</b></font></td>
     <td align="center"><?php $total;echo "<font size='5px'><b>$ $total</b></font>"?></td>
     </tr>
     
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-8 col-sm-7 col-xs-12">
                                    <div class="buttons-cart">
                                        <input type="submit" value="Update Cart" />
                                        <a href="index.php">Continue Shopping</a>
                                    </div>
                                    
                                </div>
                                <div class="col-md-4 col-sm-5 col-xs-12">
                                    <div class="cart_totals">
                                        <h2>Cart Totals</h2><br>
                                        <table>
                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <strong><th>Subtotal</th></strong>
                                                    <td><span class="amount"><?php echo "$", $total; ?></span></td><br>
                                                </tr>
                                                                                          
                                            </tbody>
                                        </table><br>
                                        <div class="wc-proceed-to-checkout"><br>
                                            <a href="checkout.php">Proceed to Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->
       
    </div>
    <!-- Body main wrapper end -->
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>
 <!-- Start Footer Area -->
        
                    <?php include("footer.php");?>
        <!-- End Footer Area -->
</html>