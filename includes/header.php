<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BhaktiShop | Nashik's Spiritual Heritage</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

<header class="main-header">
    <nav class="navbar">
        <div class="logo">
            <a href="index.php">BHAKTISHOP</a>
        </div>

        <!-- Navigation Menu -->
        <ul class="nav-links" id="navLinks">
            <li class="close-mobile-menu" id="closeMobileMenu">
                <i class="fa-solid fa-times"></i>
            </li>
            
            <li class="has-mega">
                <a href="shop.php?cat=idols">God Idols <i class="fa fa-chevron-down"></i></a>
                <div class="mega-menu">
                    <div class="mega-column">
                        <h4>By Deity</h4>
                        <a href="#">Ganesha</a>
                        <a href="#">Krishna & Radha</a>
                        <a href="#">Shiva Family</a>
                        <a href="#">Laxmi & Durga</a>
                        <a href="#">Hanuman</a>
                    </div>
                    <div class="mega-column">
                        <h4>By Material</h4>
                        <a href="#">Pure Brass (Nashik Make)</a>
                        <a href="#">Marble Dust</a>
                        <a href="#">Antique Finish</a>
                        <a href="#">Sterling Silver</a>
                    </div>
                    <div class="mega-image">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_5.png?auto=format&fit=crop&q=80&w=400" alt="Divine Ganesha Idol">
                    </div>
                </div>
            </li>

            <li class="has-mega">
                <a href="shop.php?cat=pooja">Pooja Essentials <i class="fa fa-chevron-down"></i></a>
                <div class="mega-menu">
                    <div class="mega-column">
                        <h4>Daily Rituals</h4>
                        <a href="#">Brass Diyas & Samai</a>
                        <a href="#">Pure Cow Ghee Wicks</a>
                        <a href="#">Pooja Thalis</a>
                        <a href="#">Copper Kalash</a>
                    </div>
                    <div class="mega-column">
                        <h4>Fragrance & Havan</h4>
                        <a href="#">Nashik Rose Incense</a>
                        <a href="#">Natural Dhoop Cones</a>
                        <a href="#">Loban Burners</a>
                        <a href="#">Havan Samagri</a>
                    </div>
                    <div class="mega-image">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_6.png?auto=format&fit=crop&q=80&w=400" alt="Pooja Diya">
                    </div>
                </div>
            </li>

            <li class="has-mega">
                <a href="shop.php?cat=decor">Home Decor <i class="fa fa-chevron-down"></i></a>
                <div class="mega-menu">
                    <div class="mega-column">
                        <h4>Wall & Entrance</h4>
                        <a href="#">Torans & Hangings</a>
                        <a href="#">Mantra Frames</a>
                        <a href="#">Brass Bells</a>
                        <a href="#">Shubh Labh</a>
                    </div>
                    <div class="mega-column">
                        <h4>Aesthetics</h4>
                        <a href="#">Urlis (Floating Flowers)</a>
                        <a href="#">Table Top Decor</a>
                        <a href="#">Fountains</a>
                        <a href="#">Tea Light Holders</a>
                    </div>
                    <div class="mega-image">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_9.png?auto=format&fit=crop&q=80&w=400" alt="Spiritual Decor">
                    </div>
                </div>
            </li>

            <li class="has-mega">
                <a href="shop.php?cat=gifting">Gifting <i class="fa fa-chevron-down"></i></a>
                <div class="mega-menu">
                    <div class="mega-column">
                        <h4>Occasions</h4>
                        <a href="#">Housewarming Kits</a>
                        <a href="#">Wedding Hampers</a>
                        <a href="#">Corporate Gifting</a>
                        <a href="#">Festive Returns</a>
                    </div>
                    <div class="mega-column">
                        <h4>Collections</h4>
                        <a href="#"><strong>Pocket Temples</strong> <span class="badge-mini">HOT</span></a>
                        <a href="#">Premium Aarti Kits</a>
                        <a href="#">Eco-Friendly Boxes</a>
                    </div>
                    <div class="mega-image">
                        <img src="http://localhost/BhaktiShop/assets/img/wedding_gifts.png?auto=format&fit=crop&q=80&w=400" alt="Spiritual Gifting">
                    </div>
                </div>
            </li>

            <li class="has-mega">
                <a href="shop.php?cat=wellness">Wellness <i class="fa fa-chevron-down"></i></a>
                <div class="mega-menu">
                    <div class="mega-column">
                        <h4>Meditation</h4>
                        <a href="#">Rudraksha Malas</a>
                        <a href="#">Tulsi Beads</a>
                        <a href="#">Sandalwood Malas</a>
                        <a href="#">Jap Bags</a>
                    </div>
                    <div class="mega-column">
                        <h4>Energy & Vastu</h4>
                        <a href="#">Crystal Bracelets</a>
                        <a href="#">Vastu Pyramids</a>
                        <a href="#">Copper Wearables</a>
                        <a href="#">Singing Bowls</a>
                    </div>
                    <div class="mega-image">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_4.png?auto=format&fit=crop&q=80&w=400" alt="Meditation Mala">
                    </div>
                </div>
            </li>

            <li class="festive-link"><a href="shop.php?cat=festive">Ram Navami</a></li>
        </ul>

        <div class="nav-icons">
            <!-- Search with dropdown -->
            <div class="search-wrapper">
                <a href="javascript:void(0)" id="searchToggle" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
                <div class="search-dropdown" id="searchDropdown">
                    <input type="text" placeholder="Search for idols, diyas..." id="ajaxSearch">
                    <div id="searchResults" style="margin-top:15px;">
                        <p style="font-size: 0.8rem; color: var(--gray-text); margin-bottom: 10px;">Trending:</p>
                        <div class="tag-cloud">
                            <span>Brass Diya</span>
                            <span>Pocket Temple</span>
                            <span>Incense</span>
                            <span>Ganesha</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Account with hover menu -->
            <div class="account-wrapper">
                <a href="javascript:void(0)" id="profileToggle" class="account-icon"><i class="fa-regular fa-user"></i></a>
                <div class="account-dropdown" id="accountDropdown">
                    <div class="account-links">
                        <a href="login.php" class="btn-secondary account-btn">Login</a>
                        <a href="register.php" class="btn-primary account-btn">Register</a>
                        <hr>
                        <a href="#">Track Order</a>
                        <a href="#">Wishlist</a>
                        <a href="#">Help & Support</a>
                    </div>
                </div>
            </div>

            <!-- Cart (only sidebar) -->
            <a href="javascript:void(0)" id="cartToggle"><i class="fa-solid fa-bag-shopping"></i> <span class="cart-badge">2</span></a>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" id="mobileMenuToggle">
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>
    </nav>
</header>

<!-- Cart Sidebar Only -->
<div class="sidebar" id="cartSidebar">
    <div class="sidebar-header">
        <h3>Your Bag (2)</h3>
        <button class="close-btn">&times;</button>
    </div>
    
    <div class="cart-body">
        <div class="cart-item">
            <div class="ci-img">
                <img src="http://localhost/BhaktiShop/assets/img/product/product_images_5.png?auto=format&fit=crop&q=80&w=200" alt="Ganesha">
            </div>
            <div class="ci-details">
                <h4>Brass Ganesha Idol</h4>
                <p class="ci-variant">Antique Finish / 6 Inch</p>
                <div class="ci-price-row">
                    <span class="qty-control">1 x</span>
                    <span class="price">₹1,699</span>
                </div>
            </div>
            <button class="ci-remove"><i class="fa fa-times"></i></button>
        </div>

        <div class="cart-item">
            <div class="ci-img">
                <img src="http://localhost/BhaktiShop/assets/img/product/product_images_2.png?auto=format&fit=crop&q=80&w=200" alt="Incense">
            </div>
            <div class="ci-details">
                <h4>Nashik Rose Incense</h4>
                <p class="ci-variant">Pack of 2</p>
                <div class="ci-price-row">
                    <span class="qty-control">1 x</span>
                    <span class="price">₹299</span>
                </div>
            </div>
            <button class="ci-remove"><i class="fa fa-times"></i></button>
        </div>
    </div>

    <div class="cart-footer">
        <div class="subtotal">
            <span>Subtotal</span>
            <span class="amount">₹1,998</span>
        </div>
        <p class="shipping-note">Shipping & taxes calculated at checkout.</p>
        <a href="checkout.php" class="btn-checkout">Proceed to Checkout</a>
    </div>
</div>

<div class="overlay"></div>

