<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>ZN TECH</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>

        <section id="header">
            <div class="logo-search"
                <a href="#"><img src="img/ZNlogo-nobg.png" class="logo" alt=""></a>
                <form class="search-bar">
                    <input type="text" placeholder="Search for products..." id="search-input">
                    <button onclick="searchProducts()"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div>
                <ul id="navbar">
                    <li><a class="active" href="index.html">Home</a></li>
                    <li>  
                        <a href="brands.html">Brands</a>
                        <ul class="dropdown">   
                            <div class="dropdown-content">
                            <a href="apple.html">Apple</a>
                            <a href="asus.html">Asus</a>
                            <a href="dell.html">Dell</a>
                            <a href="google.html">Google</a>
                            <a href="honor.html">Honor</a>
                            <a href="huawei.html">Huawei</a>
                            <a href="nothing.html">Nothing</a>
                            <a href="oneplus.html">OnePlus</a>
                            <a href="oppo.html">Oppo</a>
                            <a href="nothing.html">Nothing</a>
                            <a href="realme.html">Realme</a>
                            <a href="samsung.html">Samsung</a>
                            <a href="xiaomi.html">Xiaomi</a>
                            <a href="lenovo.html">Lenovo</a>
                            </div>
                        </ul>
                    </li>
                    <li>  
                        <a href="#">Categories</a>
                        <ul class="dropdown">   
                            <div class="dropdown-content">
                            <a href="smartphones.html">Smartphones</a>
                            <a href="laptops.html">Laptops</a>
                            <a href="console.html">Consoles & accessories</a>
                            <a href="smartphones.html">Cameras</a>
                            <a href="laptops.html">Home Appliances</a>
                            <a href="console.html">Television & Sound</a>
                            <a href="smartphones.html">Wearables</a>
                            <a href="laptops.html">Computing Accessories</a>
                            </div>
                        </ul>
                    </li>
                   
                    <li><a href="contact.html">Contact</a></li> 
                    <li><a href="about.html">About</a></li>
                    <li><a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <li><a href="login.html"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </div>
        </section>
        

       <section id="hero">
            <h4>ZN TECH Opening</h4>
            <h2>Super value deals</h2>
            <h1>On all products</h1>
            <p>Save more with discounts up to 70% on our opening day!</p>
            <button>Save Now!</button>

        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="img/ship-nobg.png">
                <h6>Fast Delivery</h6>
            </div>
            <div class="fe-box">
                <img src="img/online-nobg.png">
                <h6>Online Order</h6>
            </div>
            <div class="fe-box">
                <img src="img/AI-nobg.png">
                <h6>24/7 AI chatbot</h6>
            </div>
            <div class="fe-box">
                <img src="img/saveMoney-nobg.png">
                <h6>Save Money</h6>
            </div>
            <div class="fe-box">
                <img src="img/sale-nobg.png">
                <h6>Promotions</h6>
            </div>
        </section>

        <section class="hot-deals">
            <h2>Latest Smartphones</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/apple-iphone-16-pro-max.jpg" alt="apple-iphone-16-pro-max">
                            <h3>iPhone 16 Pro Max 1TB</h3>
                            <p><span class="old-price">Rs 110,990</span> Rs 106,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/samsung-galaxy-s24-ultra-5g-sm-s928-stylus.jpg" alt="samsung-galaxy-s24-ultra-5g-sm-s928-stylus">
                            <h3>Samsung Galaxy S24 Ultra</h3>
                            <p><span class="old-price">Rs 69,990</span> Rs 66,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/honor-x60.jpg" alt="honor-x60">
                            <h3>Honor X60</h3>
                            <p><span class="old-price">Rs 28,990</span> Rs 25,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/google-pixel-9-pro-xl-.jpg" alt="google-pixel-9-pro-xl-">
                            <h3>Google Pixel 9</h3>
                            <p><span class="old-price">Rs 88,990</span> Rs 81,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/huawei-nova-12-ultra.jpg" alt="huawei-nova-12-ultra">
                            <h3>Huawei Nova 12 Ultra</h3>
                            <p><span class="old-price">Rs 45,990</span> Rs 40,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/xiaomi-redmi-note-14-pro-plus-5g.jpg" alt="xiaomi-redmi-note-14-pro-plus-5g>">
                            <h3>Xiami Redmi Note 14 Pro+</h3>
                            <p><span class="old-price">Rs 35,990</span> Rs 29,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/oneplus-12.jpg" alt="oneplus-12">
                            <h3>OnePlus 12</h3>
                            <p><span class="old-price">Rs 45,990</span> Rs 42,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/nothing-phone2_.jpg" alt="nothing-phone2_">
                            <h3>Nothing Phone(2)</h3>
                            <p><span class="old-price">Rs 27,990</span> Rs 22,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/asus-zenfone-11-ultra.jpg" alt="asus-zenfone-11-ultra">
                            <h3>Asus Zenfone 11 Ultra</h3>
                            <p><span class="old-price">Rs 65,990</span> Rs 62,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/oppo-a80.jpg" alt="oppo-a80">
                            <h3>Oppo A80</h3>
                            <p><span class="old-price">Rs 35,990</span> Rs 33,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/sony-xperia-1-vi.jpg" alt="sony-xperia-1-vi">
                            <h3>Sony Xperia 1 VI</h3>
                            <p><span class="old-price">Rs 55,990</span> Rs 53,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/realme-13-plus-5g.jpg" alt="realme-13-plus-5g">
                            <h3>Realme 13+ 5G</h3>
                            <p><span class="old-price">Rs 25,990</span> Rs 23,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        
        <section class="hot-deals">
            <h2>Best Selling Laptops</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/dell-inspiron-3520-i7-512gb.jpg" alt="dell-inspiron-3520-i7-512gb">
                            <h3>Dell Inspiron 3520 i7 512GB</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/hp-spectre-x360-i5.jpg" alt="hp-spectre-x360-i5">
                            <h3>HP Spectre X360 i5 512GB</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/asus-zenbook-s-i5.jpg" alt="asus-zenbook-s-i5">
                            <h3>Asus Zenbook S i5 512GB</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/lenovo-ideapad-s100-i5-512.jpg" alt="lenovo-ideapad-s100-i5-512">
                            <h3>Lenovo Ideapad S100 i5 512GB</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/huawei-matebook-d14-i3-256.jpg" alt="huawei-matebook-d14-i3-256">
                            <h3>Huawei Matebook D14 i3 256GB</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/lenovo-notebook-v15-i5-512.jpg" alt="lenovo-notebook-v15-i5-512">
                            <h3>Lenovo Notebook V15 i5 512GB</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/asus-rog-strix-i9-1tb.jpg" alt="asus-rog-strix-i9-1tb">
                            <h3>Asus ROG Strix i9 1TB</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/huawei-matebook-d16-i5-512.jpg" alt="huawei-matebook-d16-i5-512">
                            <h3>Huawei Matebook D16 i5 512GB</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/asus-vivoboook-i5-512.jpg" alt="asus-vivoboook-i5-512">
                            <h3>Asus Vivobook i5 512GB</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        
        <section class="hot-deals">
            <h2>Console Gaming</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/ps5-slim-1tb-digital.jpg" alt="ps5-slim-1tb-digital">
                            <h3>PS5 Slim 1TB Digital</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/xbox-series-x.png" alt="xbox-series-x">
                            <h3>XBOX Series X</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/nintendo-switch.avif" alt="nintendo-switch">
                            <h3>Nintendo Switch Blue + Red</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/xbox-series-s.jpg" alt="xbox-series-s">
                            <h3>XBOX Series S</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/ps5-controller-red.jpg" alt="ps5-controller-red">
                            <h3>PS5 PlayStation DualSense Wireless Controller</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/xbox-controller.jpg" alt="xbox-controller">
                            <h3>XBOX Core Wireless Controller</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/valve-steam-deck.jpg" alt="valve-steam-deck">
                            <h3>Valve Steam Deck</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/lenovo-legion-go.jpg" alt="lenovo-legion-go">
                            <h3>Lenovo Legion Go Handheld Game Console</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product">
                            <img src="img/asus-rog-ally-7-120hz.jpg" alt="asus-rog-ally-7-120hz">
                            <h3>Asus ROG Ally 7"</h3>
                            <p><span class="old-price">Rs 95,990</span> Rs 89,990</p>
                            <form action="add_to_cart.php" method="POST" class="add-to-cart">
                                <input type="hidden" name="product_id" value="1">
                                <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
        
        
        <script>
            const swiper = new Swiper('.swiper-container', {
    slidesPerView:8, // Number of products visible in a row
    spaceBetween: 5, // Space between products
    loop: true, // Enables looping
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
   /* autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    }, */
});

        </script>
    </body>
</html>
