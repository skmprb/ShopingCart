
<?php

    session_start();


    require("php/CreateDb.php");
    require("./php/components.php");


    //create instance of createdb class
    $database = new CreateDb(dbname:"productdb",tablename:"producttb");

    if(isset($_POST['add']))
    {
        //print_r($_POST['product_id']);
        if(isset($_SESSION['cart'])){

            $item_array_id = array_column($_SESSION['cart'],'product_id');
            //print_r($item_array_id);

            if(in_array($_POST['product_id'],$item_array_id)){
                echo"<script>alert('product is alerady added in the cart...!')</script>";
                echo"<script>window.location='index.php'</script>";

            }else{
                $count = count($_SESSION['cart']);
                $item_array= array(
                    'product_id'=>$_POST['product_id']
    
                );

                $_SESSION['cart'][$count] = $item_array;

            }

        }else{
            

            $_SESSION['cart'][0] = $item_array;
            print_r($_SESSION['cart']);
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
<body>

<?php require_once ("php/header.php")?>

<div class="container">
    <div class="row text-center py-5">
        <?php 


        $result = $database-> getData();
        while($row = mysqli_fetch_assoc($result)){
            component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
        }

        ?> 

    </div>
        
</div>

<?php require_once("footer.php")?>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>