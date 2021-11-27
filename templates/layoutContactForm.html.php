<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SW Warehouse</title>
    <link rel="stylesheet" href="style-contact.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
    <header>
        <div class="menu-wrapper">
            <nav class="nav-header">
            <input class="menu-btn" type="checkbox" id="menu-btn"  />
            <label class="menu-icon" for="menu-btn"><i class="fas fa-bars fa-lg"></i> Menu</label>
        
            <div class="nav-right">
                <a href="#" id="login"><i class="fas fa-lock fa-lg"></i>  Login</a>
                <a href="#" id="cart"><i class="fa fa-shopping-cart fa-lg"></i> View Cart <span>0 Items</span></a>
            </div>
        
            <ul class="menu">
                <li class="mobile-only"><a href="#"><i class="fas fa-lock fa-lg"></i>  Login</a></li>
                <li><a href="#"><i class="far fa-circle"></i> Home</a></li>
                <li><a href="#"><i class="far fa-circle"></i> About SW</a></li>
                <li><a href="contactUs.php"><i class="far fa-circle"></i> Contact Us</a></li>
                <li><a href="#"><i class="far fa-circle"></i> View Products</a></li>
            </ul>
            </nav>
        </div>
    </header>

<div class="site-wrapper">
    <div class="flex-container">
        <div class="flex-item-left">
            <img src="./images/sports-warehouse-logo-600.png" class="logo" alt="logo of Sports Warehouse" />
        </div>
        
    </div>


    <div class="contact-form-wrapper">
        <main>
        <h1>Contact Us</h1>
        <?= $output ?>
        </main>
    </div>


</div>


<div class="bottom">
    <span class="rwd-line">© Copyright 2020 Sports Warehouse.</span>
    <span class="rwd-line">All rights reserved.</span>
    <span class="rwd-line">Website made by Awesomesauce Design.</span>
</div>

</body>
</html>

