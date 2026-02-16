<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BhaktiShop | Divine Spiritual Essentials</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<header class="main-header">
    <nav class="navbar">
        <div class="logo">
            <a href="index.php">BHAKTISHOP</a>
        </div>

        <ul class="nav-links">
            <li class="has-mega">
                <a href="#">God Idols <i class="fa fa-chevron-down"></i></a>
                <div class="mega-menu">
                    <div class="mega-column">
                        <h4>By Deity</h4>
                        <a href="#">Ganesha</a>
                        <a href="#">Krishna</a>
                        <a href="#">Shiva</a>
                        <a href="#">Laxmi</a>
                    </div>
                    <div class="mega-column">
                        <h4>By Material</h4>
                        <a href="#">Pure Brass</a>
                        <a href="#">Marble Dust</a>
                        <a href="#">Antique Gold</a>
                    </div>
                    <div class="mega-image">
                        <img src="assets/img/mega-idol.jpg" alt="Featured Idol">
                    </div>
                </div>
            </li>
            <li><a href="#">Pooja Essentials</a></li>
            <li><a href="#">Home Decor</a></li>
            <li><a href="#">Wellness</a></li>
            <li class="festive-link"><a href="#">Ram Navami Specials</a></li>
        </ul>

        <div class="nav-icons">
            <a href="javascript:void(0)" id="searchToggle"><i class="fa fa-search"></i></a>
            <a href="javascript:void(0)" id="profileToggle"><i class="fa fa-user-o"></i></a>
            <a href="#"><i class="fa fa-shopping-bag"></i><span class="cart-count">0</span></a>
        </div>
    </nav>
</header>

<div class="sidebar" id="searchSidebar">
    <div class="sidebar-header">
        <h3>Search</h3>
        <button class="close-btn">&times;</button>
    </div>
    <div class="search-body">
        <input type="text" placeholder="Search for blessings..." id="ajaxSearch">
        <div id="searchResults"></div>
    </div>
</div>

<div class="sidebar" id="profileSidebar">
    <div class="sidebar-header">
        <h3>My Account</h3>
        <button class="close-btn">&times;</button>
    </div>
    <div class="profile-links">
        <a href="#">Login / Register</a>
        <a href="#">Track Order</a>
        <a href="#">My Wishlist</a>
        <hr>
        <a href="#">About BhaktiShop</a>
        <a href="#">Support</a>
    </div>
</div>

<div class="overlay"></div>