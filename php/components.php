<?php

function component($name, $price, $img ,$productid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
            <form action=\"index.php\" method=\"post\">
                <div class=\"card shadow\">
                    <div>
                        <img src=$img alt=\"\" class=\"img-fluid card-img-top\">

                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">$name</h5>
                        <h6>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                        </h6>
                        <h5>
                            <small><s class=\"text-secondary\">$$750</s></small>
                            <span class=\"price\">$$price</span>
                        </h5>

                        <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to cart <i class=\"fas fa-shopping-cart\"></i></button>
                        
                        <input type='hidden' name='product_id' value='$productid'>
                    </div>
                </div>
            </form>
        </div>
    
    ";

    echo $element;
}



function cartElement($productimg, $productname,$productprice,$productid)
{
    $element="
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
        <div class=\"border rounded\">
            <div class=\"row bg-white\">
                <div class=\"col-md-3 pl-0\">
                    <img src=$productimg alt=\"image1\" class=\"img-fluid\">
                </div>
                <div class=\"col-md-6\">
                    <h5 class=\"pt-2\">$productname</h5>
                    <small class=\"text-secondary\">your item</small>
                    <h5 class=\"pt-2\">$$productprice</h5>
                    <button type=\"submit\" class=\"btn btn-warning mt-5\">Save for Later</button>
                    <button type=\"submit\" class=\"btn btn-danger mx-2 mt-5\" name=\"remove\">Remove</butt
                </div>
                
            </div>
        </div>
    </form>
    
    ";
    echo $element;
}









?>