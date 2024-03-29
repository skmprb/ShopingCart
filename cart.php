
<?php

session_start();

require_once("php/CreateDb.php");
require_once("php/components.php");

$db = new CreateDb(dbname:"productdb", tablename:"producttb");

if(isset($_POST['remove'])){
    if($_GET['action']=='remove'){
        foreach($_SESSION['cart'] as $key => $value){
            if($value["product_id"]==$_GET['id']){
                unset($_SESSION['cart'][$key]);
                echo "<script>window.location ='cart.php' </script>";
            }
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">


</head>
<body class="bg-light">
    <?php require_once('php/header.php'); ?>


    <div class="container-fluid">
        <div class="row px-7">
            <div class="col-md-15">
                <div class="shopping-cart">
                    <h1 class="mt-3 text-center ">My Cart</h1>
                    <hr>

                    <?php 


                    $total = 0;
                    if(isset($_SESSION['cart'])){
                        $product_id = array_column($_SESSION['cart'], 'product_id');

                        $result = $db->getData();
                            while($row = mysqli_fetch_assoc($result)){
                                foreach($product_id as $id){
                                    if($row['id'] == $id)
                                    {
                                        cartElement($row['product_image'],$row['product_name'],$row["product_price"],$row["id"]);
                                        $total = $total+(int)$row['product_price'];
                                    }
                                }
                            }
                    }else{
                        echo "<h5>Cart is Empty</h5>";
                    }


                    ?>

                    
                </div>
            </div>
            <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">
                <div class="pt-4">
                    <h6>Price details</h6>
                    <hr>
                    <div class="row price-details">
                        <div class="col-md-6">
                            <?php
                            

                            if(isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                                echo "<h6>Price($count items)</h6>";
                            }else{
                                echo "<h6>Price(0 items)</h6>";
                            }

                            ?>

                            <h6>Delivery Charges</h6>
                            <hr>
                            <h6>Amount Payable</h6>
                        </div>
                        <div class="col-md-6">
                            <h6>$<?php echo $total;?></h6>
                            <h6 class="text-sucess"> Free </h6>
                            <hr>
                            <h6>$<?php echo $total; ?></h6>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <?php require_once("footer.php")?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>