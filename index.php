<?php include 'connect.php';
  if(isset($_POST['add_product'])){
    $product_name=$_POST['product_name'];
    $product_items=$_POST['product_items'];
    $product_price=$_POST['product_price'];
    $product_brand=$_POST['product_brand'];
  
    
    $insert_query= "INSERT INTO products (product_name, product_items, product_price, product_brand)
     VALUES ('$product_name', $product_items, $product_price, '$product_brand')";
     
    if( $insert_query){
    
        if ($conn->query($insert_query) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
         $conn->close();
       

    
    }else{
        echo "error"; 
    }
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"href="project.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="nav-logo border">
                <div class="logo"></div>
            </div>
            <div class="nav-address border">
                <p class="address-first">delever to</p>
                <div class="add-icon">
                    <i class="fa-solid fa-location-dot"></i>
                    <p class="address-second">india</p>
                </div>
                
            </div> 
            <div class="nav-search border">
                <input placeholder="Search Product" class="search-input">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div> 
            <div class="nav-singIn border">
                
                 <p><span><a href="login.php">SingIn</a></span></p>
                
                <div class="account-icon ">
                    <i class="fa-regular fa-circle-user"></i>
                    <p class="nav-second">Account</p>
                </div>
               
    
            </div> 
            <div class="nav-brands border">
                
                <p><span>Product</span></p>
                <p class="nav-second">&Brands</p>
                </div>
            <div class="nav-cart border">
               <a href="view_product.php"><i class="fa-solid fa-cart-shopping"></i></a>
                Cart
            </div> 

        </div>
        <div class="panel">
            <div class="panel-all">
                <i class="fa-solid fa-bars"></i>
                All
            </div>
            <div class="panel-option">
                <a href="project.html" >Home</a>
                <a href="project.html" >New</a>
                <a href="project.html">Shop</a>
                <a href="about_contact.html">About</a>
                <a href="about_contact.html">Contact</a>
                <a href="index.php">Add product</a>
                <a href="view_product.php">view product</a>
                
            </div>
        </div>

       
    </header>
    
    
    <!--form section-->
     
    <div class="product-container">
        <div>
            <h3 class="heading"> Add Products</h3>
            <form action = "" class="add-products" method="post" enctype="multipart/form-data">
                <input type="text" name="product_name"placeholder="Enter product Name" class="input-fields" required>
                <input type="number" name="product_items"  placeholder="Enter number of Items" class="input-fields" required>
                <input type="number" name="product_price"  placeholder="Enter product price" class="input-fields" required>
                <input type="text" name="product_brand" placeholder="Enter product brand" class="input-fields" required >
                <input type="SUbmit" name="add_product" class="submit-btn" value="Add Products">
            </form>
        </div>
    </div>
     

    <footer>
        <div class="foot-panel1">
            <ul class="list-container">
                <a class="footer-head">ABOUT US</a>
                <a>Team</a>
                <a>Delivery and Returns</a>
                <a>FAQ</a>
            </ul>
            <ul class="list-container">
                <a class="footer-head">LINK INFO</a>
                <a>Skin care</a>
                <a>Makeup</a>
                <a>New Product</a>
            </ul>
            <ul class="list-container">
                <a class="footer-head">SUPPORT</a>
                <a>Contact US</a>
                <a>Privacy&Policy </a>
                
            </ul>
            <ul class="list-container">
                <a class="footer-head">CONTACT US</a>
                <a>Allure@gmail.com</a>
                <a>phone:9894567219</a>
               
            </ul>
            
               

                
            
        </div>
    </footer>


    
</body>
</html>