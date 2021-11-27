<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SW Warehouse</title>
    <link rel="stylesheet" href="style.css">
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
        <div class="flex-item-left"><img src="./images/sports-warehouse-logo-600.png" class="logo" alt="logo of Sports Warehouse" /></div>
        <div class="flex-item-right">
        <form id="form" action="search.php" method="get">
    <input type="text" name="search" id="search" value="Submit Search" placeholder="Search Products" aria-label="Search through site content">
    <button type="submit" name="submitButton" value="Search" alt="search"><i class="fas fa-search"></i><span class="sr-only">Search</span></button>
</form>
        </div>
    </div>

   
    
    <div id="categories-wrapper">
        <div class="categories">
        <?php include "templates/categories.html.php"; ?>
            <!-- <ul class="categories-list" id="buttons">
                <li><a href="#">Shoes <span class="rwd-arrow"><i class="fas fa-chevron-right"></i></span></a></li>
                <li class="active"><a href="#">Helmets <span class="rwd-arrow"><i class="fas fa-chevron-right"></i></span></a></li>
                <li><a href="#">Pants <span class="rwd-arrow"><i class="fas fa-chevron-right"></i></span></a></li>
                <li><a href="#">Tops <span class="rwd-arrow"><i class="fas fa-chevron-right"></i></span></a></li>
                <li><a href="#">Balls <span class="rwd-arrow"><i class="fas fa-chevron-right"></i></span></a></li>
                <li><a href="#">Equipment <span class="rwd-arrow"><i class="fas fa-chevron-right"></i></span></a></li>
                <li><a href="#">Training gear <span class="rwd-arrow"><i class="fas fa-chevron-right"></i></span></a></li>
            </ul> -->
        </div>
    </div>

    <div>
        <div class="search-results-wrapper">
            <p class="search-results-header">Search Results</p>
            <div class="product-cards-gallery">
            <?= $output ?>
            </div>
        </div>
    </div>
</div>

<div class="footer-wrapper">
    <footer>
        <div class="content">
            <div class="footer-site-nav box">
                <div class="footer-head">Site navigation</div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About SW</a></li>
                    <li><a href="contactUs.php">Contact Us</a></li>
                    <li><a href="#">View Products</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="footer-categories box">
                <div class="footer-head">Product categories</div>
                <ul>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Helmets</a></li>
                    <li><a href="#">Pants</a></li>
                    <li><a href="#">Tops</a></li>
                    <li><a href="#">Balls</a></li>
                    <li><a href="#">Equipment</a></li>
                    <li><a href="#">Training Gear</a></li>
                </ul>


            </div>

            <div class="footer-social box">
                <div class="footer-head">Contact Sports Warehouse</div>
                <div class="social-icons">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f fa-2x"></i><span>Facebook</span></a></li>
                        <li><a href="#"><i class="fab fa-twitter fa-2x"></i><span>Twitter</span></a></li>
                        <li> <a href="#"><i class="fas fa-paper-plane fa-2x"></i><span>Other</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<div class="bottom">
    <span class="rwd-line">© Copyright 2020 Sports Warehouse.</span>
    <span class="rwd-line">All rights reserved.</span>
    <span class="rwd-line">Website made by Awesomesauce Design.</span>
</div>

</body>
</html>

