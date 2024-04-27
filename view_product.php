<?php
include"connect.php"
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
     
    
  <div class="view-contener">
    <section class="display_product">

      <?php
      // Check if update is successful (optional)
      if (isset($_GET['update']) && $_GET['update'] == 'success') {
        echo "<p class='update-success'>Product updated successfully!</p>";
      }
      ?>

      <?php
      // Selecting products from the table
      $display_product = mysqli_query($conn, "SELECT * FROM products");

      // Check if data is present
      $num = 1;
      if (mysqli_num_rows($display_product) > 0) {
        echo "<table>
              <thead>
                <th>S. No</th>
                <th>Product Name</th>
                <th>Product Items</th>
                <th>Product Price</th>
                <th>Product Brand</th>
                <th>Action</th>
              </thead>
              <tbody>";

        // Fetch and display data
        while ($row = mysqli_fetch_assoc($display_product)) {
          ?>
          <tr>
            <td><?php echo $num; ?></td>
            <td><?php echo $row["product_name"]; ?></td>
            <td><?php echo $row["product_items"]; ?></td>
            <td><?php echo $row["product_price"]; ?></td>
            <td><?php echo $row["product_brand"]; ?></td>
            <td>
              <a href="delete.php?delete=<?php echo $row['id']; ?>" class="delete_product_btn" onclick="return confirm('Are you sure you want to delete this product?');">
                <i class="fas fa-trash"></i>  <!---take the icon from the font awesome website---> 
              </a>
              
              <a href="update.php?edit=<?php echo $row['id']; ?>"
               class ="edit_product_btn">
                <i class ="fas fa-edit"></i></a>
              
            </td>
          </tr>
          <?php
          $num++;
        }

      } else {
        echo "<div class='empty_text'>No products available</div>";
      }
      ?>

      </tbody>
      </table>
    </section>
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




