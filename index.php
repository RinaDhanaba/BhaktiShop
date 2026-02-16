<?php include('includes/header.php'); ?>

<main>
    <!-- Hero Section with improved spacing -->
    <section class="hero-section reveal">
        <div class="hero-content">
            <span class="sub-title">From the holy banks of Godavari, Nashik</span>
            <h1>Divine Craftsmanship <br> For Your Sacred Space</h1>
            <p>Elevate your home with hand-curated spiritual essentials and brassware.</p>
            <a href="#shop" class="btn btn-primary">Explore Collection</a>
        </div>
    </section>

    <!-- Category Slider Section (5 categories, 3 visible) -->
    <section class="relative-section container reveal">
        <div class="section-header">
            <h2>Shop by Category</h2>
            <div class="header-actions">
                <a href="#">View All Categories</a>
                <div class="slider-nav-small">
                    <button class="nav-btn-sm" id="catPrev"><i class="fas fa-chevron-left"></i></button>
                    <button class="nav-btn-sm" id="catNext"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <div class="horizontal-scroll-wrapper category-wrapper" id="categorySlider">
            <div class="scroll-card">
                <div class="cat-card vertical">
                    <img src="http://localhost/BhaktiShop/assets/img/god_idols.png?auto=format&fit=crop&q=80&w=600" alt="God Idols">
                    <div class="cat-overlay">
                        <h3>God Idols</h3>
                        <a href="#">Shop Sanctum</a>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="cat-card vertical">
                    <img src="http://localhost/BhaktiShop/assets/img/pooja_essentials.png?auto=format&fit=crop&q=80&w=600" alt="Pooja Essentials">
                    <div class="cat-overlay">
                        <h3>Pooja Essentials</h3>
                        <a href="#">Shop Rituals</a>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="cat-card vertical">
                    <img src="http://localhost/BhaktiShop/assets/img/home_decor.png?auto=format&fit=crop&q=80&w=600" alt="Home Decor">
                    <div class="cat-overlay">
                        <h3>Home Decor</h3>
                        <a href="#">Shop Vibe</a>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="cat-card vertical">
                    <img src="http://localhost/BhaktiShop/assets/img/brass_lamps.png?auto=format&fit=crop&q=80&w=600" alt="Brass Lamps">
                    <div class="cat-overlay">
                        <h3>Brass Lamps</h3>
                        <a href="#">Shop Diyas</a>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="cat-card vertical">
                    <img src="http://localhost/BhaktiShop/assets/img/incense_dhoop.png?auto=format&fit=crop&q=80&w=600" alt="Incense & Dhoop">
                    <div class="cat-overlay">
                        <h3>Incense & Dhoop</h3>
                        <a href="#">Shop Fragrance</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Festive Banner -->
    <section class="festive-banner reveal">
        <div class="container">
            <span class="badge">Limited Edition</span>
            <h2>Ram Navami Specials</h2>
            <p>Authentic brass idols and pooja kits prepared for the upcoming festivities.</p>
            <a href="#" class="btn btn-secondory">View Collection</a>
        </div>
    </section>

    <!-- Explore Bestsellers - Product Slider -->
    <section class="relative-section container reveal">
        <div class="section-header">
            <h2>Explore Bestsellers</h2>
            <div class="header-actions">
                <a href="#">View All</a>
                <div class="slider-nav-small">
                    <button class="nav-btn-sm" id="bestsellerPrev"><i class="fas fa-chevron-left"></i></button>
                    <button class="nav-btn-sm" id="bestsellerNext"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <div class="horizontal-scroll-wrapper product-wrapper" id="bestsellerSlider">
            <div class="scroll-card">
                <div class="product-item">
                    <div class="product-img">
                        <span class="tag sale">15% OFF</span>
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_1.png?auto=format&fit=crop&q=80&w=400" alt="Brass Ganesha">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Hand-Polished Brass Ganesha</h4>
                        <p class="price"><span class="old-price">₹1,999</span> ₹1,699</p>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="product-item">
                    <div class="product-img">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_2.png?auto=format&fit=crop&q=80&w=400" alt="Natural Incense">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Nashik Rose Incense Sticks</h4>
                        <p class="price">₹299</p>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="product-item">
                    <div class="product-img">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_3.png?auto=format&fit=crop&q=80&w=400" alt="Brass Diya">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Kerala Brass Nilavilakku</h4>
                        <p class="price">₹1,249</p>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="product-item">
                    <div class="product-img">
                        <span class="tag sale">NEW</span>
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_4.png?auto=format&fit=crop&q=80&w=400" alt="Rudraksha Mala">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>5 Mukhi Rudraksha Mala</h4>
                        <p class="price">₹899</p>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="product-item">
                    <div class="product-img">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_5.png?auto=format&fit=crop&q=80&w=400" alt="Brass Bell">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Traditional Brass Ghanti</h4>
                        <p class="price">₹1,499</p>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="product-item">
                    <div class="product-img">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_6.png?auto=format&fit=crop&q=80&w=400" alt="Copper Vessel">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Copper Pooja Kalash</h4>
                        <p class="price">₹2,499</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop by Purpose Section (NEW) -->
    <section class="purpose-section container reveal">
        <div class="center-aligned">
            <h2>Shop by Purpose</h2>
            <p class="sub-heading-text">Find the perfect item for every sacred moment</p>
        </div>
        <div class="purpose-grid">
            <div class="purpose-item">
                <div class="purpose-img">
                    <img src="http://localhost/BhaktiShop/assets/img/daily_pooja.png?auto=format&fit=crop&q=80&w=400" alt="Daily Pooja">
                </div>
                <h4>Daily Pooja</h4>
                <a href="#" style="font-size:0.8rem; color:var(--accent-orange);">Explore →</a>
            </div>
            <div class="purpose-item">
                <div class="purpose-img">
                    <img src="http://localhost/BhaktiShop/assets/img/festival_special.png?auto=format&fit=crop&q=80&w=400" alt="Festival Special">
                </div>
                <h4>Festival Special</h4>
                <a href="#" style="font-size:0.8rem; color:var(--accent-orange);">Explore →</a>
            </div>
            <div class="purpose-item">
                <div class="purpose-img">
                    <img src="http://localhost/BhaktiShop/assets/img/house_warming.png?auto=format&fit=crop&q=80&w=400" alt="House Warming">
                </div>
                <h4>House Warming</h4>
                <a href="#" style="font-size:0.8rem; color:var(--accent-orange);">Explore →</a>
            </div>
            <div class="purpose-item">
                <div class="purpose-img">
                    <img src="http://localhost/BhaktiShop/assets/img/wedding_gifts.png?auto=format&fit=crop&q=80&w=400" alt="Wedding Gifts">
                </div>
                <h4>Wedding Gifts</h4>
                <a href="#" style="font-size:0.8rem; color:var(--accent-orange);">Explore →</a>
            </div>
        </div>
    </section>

    <!-- Find Meaningful Collection Section (with products & links) -->
    <section class="relative-section container reveal">
        <div class="center-aligned">
            <h2>Find Meaningful Collection For</h2>
            <p class="sub-heading-text">Curated items for every sacred corner of your home</p>
        </div>
        
        <div class="room-grid" style="margin-bottom: 40px;">
            <div class="room-item active" data-filter="all">All</div>
            <div class="room-item" data-filter="pooja">Pooja Room</div>
            <div class="room-item" data-filter="living">Living Area</div>
            <div class="room-item" data-filter="office">Office Desk</div>
            <div class="room-item" data-filter="entrance">Entrance</div>
        </div>

        <div class="horizontal-scroll-wrapper product-wrapper" id="collectionSlider">
            <div class="scroll-card">
                <div class="product-item" data-category="pooja">
                    <div class="product-img">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_10.png?auto=format&fit=crop&q=80&w=400" alt="Brass Lamp">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Brass Aarti Lamp</h4>
                        <p class="price">₹899</p>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="product-item" data-category="living">
                    <div class="product-img">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_2.png?auto=format&fit=crop&q=80&w=400" alt="Ganesha Idol">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Brass Ganesha for Living</h4>
                        <p class="price">₹2,499</p>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="product-item" data-category="office">
                    <div class="product-img">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_4.png?auto=format&fit=crop&q=80&w=400" alt="Rudraksha">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Rudraksha for Desk</h4>
                        <p class="price">₹1,299</p>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="product-item" data-category="entrance">
                    <div class="product-img">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_5.png?auto=format&fit=crop&q=80&w=400" alt="Toran">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Decorative Toran</h4>
                        <p class="price">₹599</p>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="product-item" data-category="pooja">
                    <div class="product-img">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_6.png?auto=format&fit=crop&q=80&w=400" alt="Incense">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Premium Incense Pack</h4>
                        <p class="price">₹399</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="center-aligned" style="margin-top: 30px;">
            <a href="#" class="btn btn-secondory">View All Collections →</a>
        </div>
    </section>

    <!-- New Arrivals - Second Product Slider (NEW) -->
    <section class="relative-section container reveal">
        <div class="section-header">
            <h2>New Arrivals</h2>
            <div class="header-actions">
                <a href="#">View All</a>
                <div class="slider-nav-small">
                    <button class="nav-btn-sm" id="newArrivalsPrev"><i class="fas fa-chevron-left"></i></button>
                    <button class="nav-btn-sm" id="newArrivalsNext"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <div class="horizontal-scroll-wrapper product-wrapper" id="newArrivalsSlider">
            <div class="scroll-card">
                <div class="product-item">
                    <div class="product-img">
                        <span class="tag sale">NEW</span>
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_7.png?auto=format&fit=crop&q=80&w=400" alt="Panchaloha Idol">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Panchaloha Venkateswara</h4>
                        <p class="price">₹4,999</p>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="product-item">
                    <div class="product-img">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_8.png?auto=format&fit=crop&q=80&w=400" alt="Sandalwood Mala">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Sandalwood Mala</h4>
                        <p class="price">₹649</p>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="product-item">
                    <div class="product-img">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_3.png?auto=format&fit=crop&q=80&w=400" alt="Brass Deepam">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Traditional Brass Deepam</h4>
                        <p class="price">₹1,849</p>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="product-item">
                    <div class="product-img">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_5.png?auto=format&fit=crop&q=80&w=400" alt="Conch">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Sacred Shankh</h4>
                        <p class="price">₹2,199</p>
                    </div>
                </div>
            </div>
            <div class="scroll-card">
                <div class="product-item">
                    <div class="product-img">
                        <img src="http://localhost/BhaktiShop/assets/img/product/product_images_9.png?auto=format&fit=crop&q=80&w=400" alt="Copper Glass">
                        <button class="quick-add">Add to Cart</button>
                    </div>
                    <div class="product-info">
                        <h4>Copper Pooja Glass</h4>
                        <p class="price">₹449</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Improved Brand Promise Section -->
    <section class="brand-promise-revamp reveal">
        <div class="container">
            <div class="promise-grid">
                <div class="promise-box">
                    <h5>Authentic Nashik Sourced</h5>
                    <p>Directly from the skilled artisans of the Godavari banks, preserving centuries-old traditions.</p>
                </div>
                <div class="promise-box border-lr">
                    <h5>Eco-Conscious</h5>
                    <p>Sustainable materials, plastic-free packaging, and ethical production practices.</p>
                </div>
                <div class="promise-box">
                    <h5>Divine Delivery</h5>
                    <p>Secure, handled-with-care shipping across India with special blessings included.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Slider navigation functions
    function setupSlider(sliderId, prevId, nextId) {
        const slider = document.getElementById(sliderId);
        const prevBtn = document.getElementById(prevId);
        const nextBtn = document.getElementById(nextId);
        
        if (!slider || !prevBtn || !nextBtn) return;
        
        const scrollAmount = 300; // Adjust based on card width
        
        prevBtn.addEventListener('click', () => {
            slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });
        
        nextBtn.addEventListener('click', () => {
            slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });
    }
    
    // Initialize all sliders
    setupSlider('categorySlider', 'catPrev', 'catNext');
    setupSlider('bestsellerSlider', 'bestsellerPrev', 'bestsellerNext');
    setupSlider('newArrivalsSlider', 'newArrivalsPrev', 'newArrivalsNext');
    
    // Filter functionality for collection section
    const filterItems = document.querySelectorAll('.room-item');
    const collectionItems = document.querySelectorAll('#collectionSlider .product-item');
    
    filterItems.forEach(item => {
        item.addEventListener('click', function() {
            // Update active state
            filterItems.forEach(fi => fi.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            
            // Filter products
            collectionItems.forEach(product => {
                if (filter === 'all' || product.dataset.category === filter) {
                    product.closest('.scroll-card').style.display = 'block';
                } else {
                    product.closest('.scroll-card').style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php include('includes/footer.php'); ?>