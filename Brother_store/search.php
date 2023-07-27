
<?php

//connexion to the database
$serverName="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="brotherstore";


$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);



if(!$conn){
    die("connection failed:      " . mysqli_connect_error());
} 

//the logique for search bar for womens clothings
if(isset($_POST['submit'])){

    $search = mysqli_real_escape_string($conn,$_POST['Search']);


    $sql ="SELECT * FROM products_women WHERE (productsw_title LIKE '%$search%') OR productsw_img1 LIKE '%$search%' 
    OR (productsw_img2 LIKE '%$search%') OR (productsw_img3 LIKE '%$search%')
    OR (productsw_price LIKE '%$search%') OR (productsw_desc LIKE '%$search%');";
    $REsult = mysqli_query($conn,$sql);
    $queryResult = mysqli_num_rows($REsult);
    if($queryResult > 0){
       
        header("location:clothingwomens.php ");
        }
        else{
            header("location:noresultsearch.php");
                    
         }  
         
       
    
    

//the logique for search bar for electronic 


    
        $sqlElcotronic ="SELECT * FROM products_electronic WHERE (products_title LIKE '%$search%') OR products_img1 LIKE '%$search%' 
        OR (products_img2 LIKE '%$search%') OR (products_img3 LIKE '%$search%')
        OR (products_price LIKE '%$search%') OR (products_desc LIKE '%$search%');";
        $Result = mysqli_query($conn,$sqlElcotronic);
        $queryresult = mysqli_num_rows($Result);
        if($queryresult > 0){
           
            header("location:mobile.php ");
            }
            
             
        


//the logique for search bar for men clothings
      
            $sqlMen ="SELECT * FROM products WHERE (products_title LIKE '%$search%') OR products_img1 LIKE '%$search%' 
            OR (products_img2 LIKE '%$search%') OR (products_img3 LIKE '%$search%')
            OR (products_price LIKE '%$search%') OR (products_desc LIKE '%$search%');";
            $result = mysqli_query($conn,$sqlMen);
            $QueryResult = mysqli_num_rows($result);
            if($QueryResult > 0){
               
                header("location:mensclothing.php ");
                }

//the logique for search bar for shoes men
                $sqlMen ="SELECT * FROM product_categories_shoes WHERE (p_cat_title LIKE '%$search%') OR (p_cat_desc LIKE '%$search%');";
                $re = mysqli_query($conn,$sqlMen);
                $Query = mysqli_num_rows($re);
                if($Query > 0){
                   
                    header("location:menshoes.php ");
                    }


//the logique for search bar for shoes women

                    $sqlMen ="SELECT * FROM product_categories_womens_shoes WHERE (pw_cat_title LIKE '%$search%') OR    (pw_cat_desc LIKE '%$search%');";
                    $resul= mysqli_query($conn,$sqlMen);
                    $Queryy = mysqli_num_rows($resul);
                    if($Queryy > 0){
                       
                        header("location:shoeswomen.php");
                        }


                      //the logique for search bar for accessories women

                    $sqlMen ="SELECT * FROM product_categories_womens_accessories WHERE (pw_cat_title LIKE '%$search%') OR   (pw_cat_desc LIKE '%$search%');";
                    $resut = mysqli_query($conn,$sqlMen);
                    $QueryR = mysqli_num_rows($resut);
                    if($QueryR > 0){
                       
                        header("location:accessorieswomen.php");

                        }

                        
                      //the logique for search bar for accessories women

                    $sqlMen ="SELECT * FROM product_categories_accessories WHERE (p_cat_title LIKE '%$search%') OR   (p_cat_desc LIKE '%$search%');";
                    $res = mysqli_query($conn,$sqlMen);
                    $QueryRr = mysqli_num_rows($res);
                    if($QueryRr > 0){
                       
                        header("location:mensaccessories.php");

                        }
        
    


















                if($QueryResult < 0 && $queryresult < 0 && $queryResult < 0  && $QueryR < 0  && $Queryy < 0 && $QueryRr < 0){
                    header("location:noresultsearch.php ");

                }
               
                
               
}


 



?>


