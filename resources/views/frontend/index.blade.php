<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">


    <title>Riode - Ultimate eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Riode - eCommerce Template">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('ui/frontend/images/icons/favicon.png') }}">
    <!-- Preload Font -->
    <link rel="preload" href="{{ asset('ui/fronyend/fonts/riode.ttf?5gap68')}}" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>


    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/vendor/animate/animate.min.css') }}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/vendor/owl-carousel/owl.carousel.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/vendor/sticky-icon/stickyicon.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/vendor/animate/animate.min.css') }}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/vendor/magnific-popup/magnific-popup.min.css') }}">


    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/css/demo19.min.css') }}">
</head>

<body class="home">

    <div class="page-wrapper">
        <h1 class="d-none">Riode - Responsive eCommerce HTML Template</h1>
        <header class="header">
            <div class="header-middle sticky-header fix-top sticky-content">
                <div class="container-fluid">
                    <div class="header-left">
                        <a href="#" class="mobile-menu-toggle">
                            <i class="d-icon-bars2"></i>
                        </a>
                        <a href="demo19.html" class="logo">
                            <img src="{{ asset('ui/frontend/images/demos/demo19/logo.png') }}" alt="logo" width="153" height="44" />
                        </a>
                        <!-- End Logo -->
                        <nav class="main-nav">
                            <ul class="menu">
                                <li class="active">
                                    <a href="demo19.html">Home</a>
                                </li>
                                <li>
                                    <a href="demo19-shop.html">Categories</a>
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <h4 class="menu-title">Variations 1</h4>
                                                <ul>
                                                    <li><a href="shop-classic-filter.html">Classic Filter</a></li>
                                                    <li><a href="shop-left-toggle-sidebar.html">Left Toggle Filter</a>
                                                    </li>
                                                    <li><a href="shop-right-toggle-sidebar.html">Right Toggle
                                                            Sidebar</a></li>
                                                    <li><a href="shop-horizontal-filter.html">Horizontal Filter </a>
                                                    </li>
                                                    <li><a href="shop-navigation-filter.html">Navigation Filter</a></li>

                                                    <li><a href="shop-off-canvas-filter.html">Off-Canvas Filter </a>
                                                    </li>
                                                    <li><a href="shop-top-banner.html">Top Banner</a></li>
                                                    <li><a href="shop-inner-top-banner.html">Inner Top Banner</a></li>
                                                    <li><a href="shop-with-bottom-block.html">With Bottom Block</a></li>
                                                    <li><a href="shop-category-in-page-header.html">Category In Page
                                                            Header</a>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <h4 class="menu-title">Variations 2</h4>
                                                <ul>
                                                    <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                                    <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                                    <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                                    <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                                    <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                                    <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                                    <li><a href="shop-list-mode.html">List Mode</a></li>
                                                    <li><a href="shop-pagination.html">Pagination</a></li>
                                                    <li><a href="shop-infinite-ajaxscroll.html">Infinite Ajaxscroll </a>
                                                    </li>
                                                    <li><a href="shop-loadmore-button.html">Loadmore Button</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3">
                                                <h4 class="menu-title">Variations 3</h4>
                                                <ul>
                                                    <li><a href="shop-category-grid-shop.html">Category Grid Shop</a>
                                                    </li>
                                                    <li><a href="shop-category+products.html">Category + Products</a>
                                                    </li>
                                                    <li><a href="shop-default-1.html">Shop Default 1 </a></li>
                                                    <li><a href="shop-default-2.html">Shop Default 2</a>
                                                    </li>
                                                    <li><a href="shop-default-3.html">Shop Default 3</a>
                                                    </li>
                                                    <li><a href="shop-default-4.html">Shop Default 4</a>
                                                    </li>
                                                    <li><a href="shop-default-5.html">Shop Default 5</a>
                                                    </li>
                                                    <li><a href="shop-default-6.html">Shop Default 6</a>
                                                    </li>
                                                    <li><a href="shop-default-7.html">Shop Default 7</a>
                                                    </li>
                                                    <li><a href="shop-default-8.html">Shop Default 8</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-4 col-lg-3 menu-banner menu-banner1 banner banner-fixed">
                                                <figure>
                                                    <img src="images/menu/banner-1.jpg" alt="Menu banner" width="221" height="330" />
                                                </figure>
                                                <div class="banner-content y-50">
                                                    <h4 class="banner-subtitle font-weight-bold text-primary ls-m">Sale.
                                                    </h4>
                                                    <h3 class="banner-title font-weight-bold"><span class="text-uppercase">Up to</span>70% Off</h3>
                                                    <a href="demo19-shop.html" class="btn btn-link btn-underline">shop
                                                        now<i class="d-icon-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- End Megamenu -->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="demo19-product.html">Products</a>
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-6 col-sm-4 col-md-3">
                                                <h4 class="menu-title">Product Pages</h4>
                                                <ul>
                                                    <li><a href="product-simple.html">Simple Product</a></li>
                                                    <li><a href="product-featured.html">Featured &amp; On Sale</a></li>
                                                    <li><a href="product.html">Variable Product</a></li>
                                                    <li><a href="product-variable-swatch.html">Variation Swatch
                                                            Product</a></li>
                                                    <li><a href="product-grouped.html">Grouped Product </a></li>
                                                    <li><a href="product-external.html">External Product</a></li>
                                                    <li><a href="product-in-stock.html">In Stock Product</a></li>
                                                    <li><a href="product-out-stock.html">Out of Stock Product</a></li>
                                                    <li><a href="product-upsell.html">Upsell Products</a></li>
                                                    <li><a href="product-cross-sell.html">Cross Sell Products</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3">
                                                <h4 class="menu-title">Product Layouts</h4>
                                                <ul>
                                                    <li><a href="product-vertical.html">Vertical Thumb</a></li>
                                                    <li><a href="product-horizontal.html">Horizontal Thumb</a></li>
                                                    <li><a href="product-gallery.html">Gallery Type</a></li>
                                                    <li><a href="product-grid.html">Grid Images</a></li>
                                                    <li><a href="product-masonry.html">Masonry Images</a></li>
                                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                                    <li><a href="product-sticky-both.html">Left & Right Sticky</a></li>
                                                    <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                                                    <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                                                    <li><a href="product-full.html">Full Width Layout </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3">
                                                <h4 class="menu-title">Product Features</h4>
                                                <ul>
                                                    <li><a href="product-sale.html">Sale Countdown</a></li>
                                                    <li><a href="product-hurryup.html">Hurry Up Notification </a></li>
                                                    <li><a href="product-attribute-guide.html">Attribute Guide </a></li>
                                                    <li><a href="product-sticky-cart.html">Add Cart Sticky</a></li>
                                                    <li><a href="product-thumbnail-label.html">Labels on Thumbnail</a>
                                                    </li>
                                                    <li><a href="product-more-description.html">More Description
                                                            Tabs</a></li>
                                                    <li><a href="product-accordion-data.html">Data In Accordion</a></li>
                                                    <li><a href="product-tabinside.html">Data Inside</a></li>
                                                    <li><a href="product-video.html">Video Thumbnail </a></li>
                                                    <li><a href="product-360-degree.html">360 Degree Thumbnail </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-3 menu-banner menu-banner2 banner banner-fixed">
                                                <figure>
                                                    <img src="{{asset('ui/frontend/images/menu/banner-2.jpg')}}" alt="Menu banner" width="221" height="330" />
                                                </figure>
                                                <div class="banner-content x-50 text-center">
                                                    <h3 class="banner-title text-white text-uppercase">Sunglasses</h3>
                                                    <h4 class="banner-subtitle font-weight-bold text-white mb-0">$23.00
                                                        -
                                                        $120.00</h4>
                                                </div>
                                            </div>
                                            <!-- End MegaMenu -->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                        <li><a href="account.html">My Account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="error-404.html">Error 404</a>
                                            <ul>
                                                <li><a href="error-404.html">Error 404-1</a></li>
                                                <li><a href="error-404-1.html">Error 404-2</a></li>
                                                <li><a href="error-404-2.html">Error 404-3</a></li>
                                                <li><a href="error-404-3.html">Error 404-4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="element.html">Elements</a>
                                    <div class="megamenu">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h4 class="menu-title">Elements 1</h4>
                                                <ul>
                                                    <li><a href="element-accordions.html">Accordions</a></li>
                                                    <li><a href="element-alerts.html">Alert &amp; Notification</a></li>

                                                    <li><a href="element-banner-effect.html">Banner Effect

                                                        </a></li>
                                                    <li><a href="element-banner.html">Banner
                                                        </a></li>
                                                    <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                                    <li><a href="element-breadcrumb.html">Breadcrumb
                                                        </a></li>
                                                    <li><a href="element-buttons.html">Buttons</a></li>
                                                    <li><a href="element-cta.html">Call to Action</a></li>
                                                    <li><a href="element-countdown.html">Countdown
                                                        </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="menu-title">Elements 2</h4>
                                                <ul>
                                                    <li><a href="element-counter.html">Counter </a></li>
                                                    <li><a href="element-creative-grid.html">Creative Grid

                                                        </a></li>
                                                    <li><a href="element-animation.html">Entrance Effect

                                                        </a></li>
                                                    <li><a href="element-floating.html">Floating

                                                        </a></li>
                                                    <li><a href="element-hotspot.html">Hotspot

                                                        </a></li>
                                                    <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                                    <li><a href="element-icons.html">Icons</a></li>
                                                    <li><a href="element-image-box.html">Image box

                                                        </a></li>
                                                    <li><a href="element-instagrams.html">Instagrams</a></li>

                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="menu-title">Elements 3</h4>
                                                <ul>

                                                    <li><a href="element-categories.html">Product Category</a></li>
                                                    <li><a href="element-products.html">Products</a></li>
                                                    <li><a href="element-product-banner.html">Products + Banner

                                                        </a></li>
                                                    <li><a href="element-product-grid.html">Products + Grid

                                                        </a></li>
                                                    <li><a href="element-product-single.html">Product Single

                                                        </a>
                                                    </li>
                                                    <li><a href="element-product-tab.html">Products + Tab

                                                        </a></li>
                                                    <li><a href="element-single-product.html">Single Product

                                                        </a></li>
                                                    <li><a href="element-slider.html">Slider

                                                        </a></li>
                                                    <li><a href="element-social-link.html">Social Icons </a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <h4 class="menu-title">Elements 4</h4>
                                                <ul>
                                                    <li><a href="element-subcategory.html">Subcategory

                                                        </a></li>
                                                    <li><a href="element-svg-floating.html">Svg Floating

                                                        </a></li>
                                                    <li><a href="element-tabs.html">Tabs</a></li>
                                                    <li><a href="element-testimonials.html">Testimonials
                                                        </a></li>
                                                    <li><a href="element-titles.html">Title</a></li>
                                                    <li><a href="element-typography.html">Typography</a></li>
                                                    <li><a href="element-vendor.html">Vendor

                                                        </a></li>
                                                    <li><a href="element-video.html">Video

                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <a href="https://d-themes.com/buynow/riodehtml">Buy Riode!</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-center">
                    </div>
                    <div class="header-right">
                        <!-- End Divider -->
                        <div class="header-search hs-toggle mr-4">
                            <a href="#" class="search-toggle" title="search-toggle">
                                <i class="d-icon-search"></i>
                            </a>
                            <form action="#" class="input-wrapper">
                                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search your keyword..." required />
                                <button class="btn btn-search" type="submit" title="submit-button">
                                    <i class="d-icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <!-- End Header Search -->
                        <a href="ajax/login.html" class="login-link d-lg-show mr-4" title="login"><i class="d-icon-user"></i></a>

                        <div class="dropdown wishlist wishlist-dropdown off-canvas mr-4 d-lg-show">
                            <a href="wishlist.html" class="wishlist-toggle" title="wishlist">
                                <i class="d-icon-heart"></i>
                            </a>
                            <div class="canvas-overlay"></div>
                            <!-- End Wishlist Toggle -->
                            <div class="dropdown-box scrollable">
                                <div class="canvas-header">
                                    <h4 class="canvas-title">wishlist</h4>
                                    <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">close<i class="d-icon-arrow-right"></i><span class="sr-only">wishlist</span></a>
                                </div>
                                <div class="products scrollable">
                                    <div class="product product-wishlist">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="images/wishlist/product-1.jpg" width="100" height="100" alt="product" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Girl's Dark Bag</a>
                                            <div class="price-box">
                                                <span class="product-price">$84.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of wishlist Product -->
                                    <div class="product product-wishlist">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="images/wishlist/product-2.jpg" width="100" height="100" alt="product" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Women's Fashional Comforter
                                            </a>
                                            <div class="price-box">
                                                <span class="product-price">$84.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of wishlist Product -->
                                    <div class="product product-wishlist">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('ui/frontend/images/wishlist/product-3.jpg')}}" width="100" height="100" alt="product" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Wide Knickerbockers</a>
                                            <div class="price-box">
                                                <span class="product-price">$84.00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- End of wishlist Product -->
                                </div>
                                <a href="wishlist.html" class="btn btn-dark wishlist-btn mt-4"><span>Go To
                                        Wishlist</span></a>
                                <!-- End of Products  -->
                            </div>
                            <!-- End Dropdown Box -->
                        </div>

                        <div class="dropdown cart-dropdown type2 mr-0 mr-lg-2">
                            <a href="#" class="cart-toggle link">
                                <i class="d-icon-bag"><span class="cart-count">2</span></i>
                            </a>
                            <div class="dropdown-box">
                                <div class="products scrollable">
                                    <div class="product product-cart">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('ui/frontend/images/cart/product-1.jpg')}}" alt="product" width="80" height="88" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Riode White Trends</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$21.00</span>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End of Cart Product -->
                                    <div class="product product-cart">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="{{asset('ui/frontend/images/cart/product-2.jpg')}}" alt="product" width="80" height="88" />
                                            </a>
                                            <button class="btn btn-link btn-close">
                                                <i class="fas fa-times"></i><span class="sr-only">Close</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="product.html" class="product-name">Dark Blue Women’s
                                                Leomora Hat</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">$118.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Cart Product -->
                                </div>
                                <!-- End of Products  -->
                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">$139.00</span>
                                </div>
                                <!-- End of Cart Total -->
                                <div class="cart-action">
                                    <a href="cart.html" class="btn btn-dark btn-link">View Cart</a>
                                    <a href="checkout.html" class="btn btn-dark"><span>Go To Checkout</span></a>
                                </div>
                                <!-- End of Cart Action -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>
        <!-- End Header -->
        <main class="main">
            <div class="page-content">
                <section class="intro-section">
                    <div class="intro-slider animation-slider owl-carousel owl-theme row cols-1 gutter-no mb-2" data-owl-options="{
                        'items': 1,
                        'loop': true,
                        'dots': false,
                        'autoplay': true
                    }">
                        <div class="intro-slide1 banner banner-fixed">
                            <figure class="kenBurnsToRight duration">
                                <img src="{{asset('ui/frontend/images/demos/demo19/slides/1.jpg')}}" alt="intro-banner" width="1903" height="867" style="background-color: #2e2e31" />
                                <div class="snowfall particle-effect"></div>
                            </figure>
                            <div class="banner-content y-50">
                                <h4 class="banner-subtitle d-flex align-items-center text-primary text-uppercase font-weight-bold slide-animate" data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s'}">
                                    Christmastide</h4>
                                <h3 class="banner-title ls-m font-weight-bolder slide-animate" data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '.3s'}">
                                    Fashion Collection</h3>
                                <span class="h-divider ml-1 bg-primary slide-animate" data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '.4s'}"></span>
                                <p class="font-primary ls-s text-dark ml-1 slide-animate" data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '.4s'}">
                                    Get Free Shipping on all orders over $75</p>
                                <a href="demo19-shop.html" class="btn btn-dark ml-1 slide-animate" data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '.5s'}">Shop
                                    now <i class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="intro-slide2 banner banner-fixed">
                            <figure class="kenBurnsToLeft duration">
                                <img src="{{asset('ui/frontend/images/demos/demo19/slides/2.jpg')}}" alt="intro-banner" width="1903" height="867" style="background-color: #2e2e31" />
                                <div class="particle-effect sparkle"></div>
                            </figure>
                            <div class="banner-content y-50">
                                <h4 class="banner-subtitle d-flex align-items-center text-white text-uppercase font-weight-bold slide-animate" data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1.2s'}">
                                    Summer Season’s</h4>
                                <h3 class="banner-title ls-m font-weight-bolder slide-animate" data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1.2s', 'delay': '.3s'}">
                                    Fashion Collection</h3>
                                <span class="h-divider ml-1 bg-white slide-animate" data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1.2s', 'delay': '.3s'}"></span>
                                <p class="font-primary ls-s ml-1 text-dark slide-animate" data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1.2s', 'delay': '.3s'}">
                                    Get Free Shipping on all orders over $75</p>
                                <a href="demo19-shop.html" class="btn btn-dark ml-1 slide-animate" data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1.2s', 'delay': '.4s'}">Shop
                                    now <i class="d-icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="intro-banners gutter-sm row">
                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="banner banner-1 banner-fixed content-middle overlay-dark appear-animate" data-animation-options="{
                                'name': 'fadeInLeftShorter',
                                'delay': '.5s'
                            }">
                                <figure>
                                    <img src="{{asset('ui/frontend/images/demos/demo19/banner/1.jpg')}}" alt="banner" width="380" height="207" style="background-color: rgb(233, 233, 233);" />
                                </figure>
                                <div class="banner-content">
                                    <h3 class="banner-title font-weight-bold">For Men’s</h3>
                                    <h4 class="banner-subtitle text-uppercase text-body mb-0">
                                        Starting at $29
                                    </h4>
                                    <hr class="bg-grey">
                                    <a href="demo19-shop.html" class="btn btn-link btn-underline">Shop Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-2 order-lg-auto order-sm-last">
                            <div class="banner banner-2 banner-fixed content-middle content-center overlay-effect4 appear-animate" data-animation-options="{
                                'name': 'fadeIn',
                                'delay': '.3s'
                            }">
                                <figure>
                                    <img src="{{asset('ui/frontend/images/demos/demo19/banner/2.jpg')}}" alt="banner" width="350" height="177" style="background-color: rgb(29, 29, 29);" />
                                </figure>
                                <div class="banner-content">
                                    <h4 class="mb-2 text-uppercase text-primary font-weight-normal">GEt 40% Off Your
                                        Entire Order!</h4>
                                    <h3 class="banner-title font-weight-bold text-white">Black
                                        Friday Sale</h3>
                                    <p class="mt-1">Use code <strong class="text-white">BLKFRI40</strong> at checkout.
                                    </p>
                                    <a href="demo19-shop.html" class="btn btn-primary btn-outline text-white">Shop Now
                                        <i class="d-icon-arrow-right ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-2">
                            <div class="banner banner-3 banner-fixed content-middle overlay-dark appear-animate" data-animation-options="{
                                'name': 'fadeInRightShorter',
                                'delay': '.5s'
                            }">
                                <figure>
                                    <img src="{{asset('ui/frontend/images/demos/demo19/banner/3.jpg')}}" alt="banner" width="380" height="207" style="background-color: rgb(233, 233, 233);" />
                                </figure>
                                <div class="banner-content">
                                    <h3 class="banner-title font-weight-bold">For Women’s</h3>
                                    <h4 class="banner-subtitle text-uppercase text-body mb-0">
                                        Starting at $29
                                    </h4>
                                    <hr class="bg-grey">
                                    <a href="demo19-shop.html" class="btn btn-link btn-underline">Shop Now<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="product-wrapper container-fluid mt-8 pt-7 appear-animate">
                    <h2 class="title title-simple text-center">Shop bags</h2>
                    <div class="owl-carousel owl-theme row owl-dot-grey cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2" data-owl-options="{
                        'items': 6,
                        'margin': 20,
                        'loop': false,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '576': {
                                'items': 3
                            },
                            '768': {
                                'items': 4
                            },
                            '992': {
                                'items': 5,
                                'dots': false
                            },
                            '1200': {
                                'items': 6,
                                'dots': false
                            }
                        }
                    }">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="demo19-product.html">
                                    <img src="{{asset('ui/frontend/images/demos/demo19/products/1.jpg')}}" alt="product" width="300" height="338">
                                    <img src="{{asset('ui/frontend/images/demos/demo19/products/1-1.jpg')}}" alt="product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo19-product.html">Women's Fashion Backpacks</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$200.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="demo19-product.html">
                                    <img src="{{asset('ui/frontend/images/demos/demo19/products/2.jpg')}}" alt="product" width="300" height="338">
                                    <img src="{{asset('ui/frontend/images/demos/demo19/products/2-1.jpg')}}" alt="product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo19-product.html">Women's Suede Hand Bag</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$200.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="demo19-product.html">
                                    <img src="images/demos/demo19/products/3.jpg" alt="product" width="300" height="338">
                                    <img src="images/demos/demo19/products/3-1.jpg" alt="product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo19-product.html">Fashion Overnight Bag</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$200.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="demo19-product.html">
                                    <img src="images/demos/demo19/products/4.jpg" alt="product" width="300" height="338">
                                    <img src="images/demos/demo19/products/4-1.jpg" alt="product" width="300" height="338">
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-new">new</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo19-product.html">Fashion Suede Handbag</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$200.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="demo19-product.html">
                                    <img src="images/demos/demo19/products/5.jpg" alt="product" width="300" height="338">
                                    <img src="images/demos/demo19/products/5-1.jpg" alt="product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo19-product.html">Women's Black Handbag</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$200.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="demo19-product.html">
                                    <img src="images/demos/demo19/products/6.jpg" alt="product" width="300" height="338">
                                    <img src="images/demos/demo19/products/6-1.jpg" alt="product" width="300" height="338">
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-new">new</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo19-product.html">Pima SS O-Neck NOOS Homme</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$200.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="categories container-fluid mt-10 pt-2 appear-animate">
                    <h2 class="title title-simple text-center">Shop by categories</h2>
                    <div class="owl-carousel owl-theme row owl-nav-full cols-xl-5 cols-lg-4 cols-md-3 cols-sm-2 cols-1 gutter-sm" data-owl-options="{
                        'items': 5,
                        'margin': 10,
                        'loop': false,
                        'nav': true,
                        'dots': false,
                        'responsive': {
                            '0': {
                                'items': 1
                            },
                            '576': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4
                            },
                            '1200': {
                                'items': 5
                            }
                        }
                    }">
                        <div class="category category-absolute category-classic overlay-zoom" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.3s'
                        }">
                            <a href="demo19-shop.html">
                                <figure class="category-media">
                                    <img src="images/demos/demo19/categories/1.jpg" alt="category" width="348" height="348" />
                                </figure>
                            </a>
                            <div class="category-content">
                                <h4 class="category-name">For Women’s</h4>
                                <span class="category-count">
                                    <span>47</span> Products
                                </span>
                            </div>
                        </div>
                        <div class="category category-absolute category-classic overlay-zoom" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.4s'
                        }">
                            <a href="demo19-shop.html">
                                <figure class="category-media">
                                    <img src="images/demos/demo19/categories/2.jpg" alt="category" width="348" height="348" />
                                </figure>
                            </a>
                            <div class="category-content">
                                <h4 class="category-name">Sporting Goods</h4>
                                <span class="category-count">
                                    <span>42</span> Products
                                </span>
                            </div>
                        </div>
                        <div class="category category-absolute category-classic overlay-zoom" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.5s'
                        }">
                            <a href="demo19-shop.html">
                                <figure class="category-media">
                                    <img src="images/demos/demo19/categories/3.jpg" alt="category" width="348" height="348" />
                                </figure>
                            </a>
                            <div class="category-content">
                                <h4 class="category-name">For Men’s</h4>
                                <span class="category-count">
                                    <span>9</span> Products
                                </span>
                            </div>
                        </div>
                        <div class="category category-absolute category-classic overlay-zoom" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.6s'
                        }">
                            <a href="demo19-shop.html">
                                <figure class="category-media">
                                    <img src="images/demos/demo19/categories/4.jpg" alt="category" width="348" height="348" />
                                </figure>
                            </a>
                            <div class="category-content">
                                <h4 class="category-name">Accessories &amp; Watches</h4>
                                <span class="category-count">
                                    <span>25</span> Products
                                </span>
                            </div>
                        </div>
                        <div class="category category-absolute category-classic overlay-zoom" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.7s'
                        }">
                            <a href="demo19-shop.html">
                                <figure class="category-media">
                                    <img src="images/demos/demo19/categories/5.jpg" alt="category" width="348" height="348" />
                                </figure>
                            </a>
                            <div class="category-content">
                                <h4 class="category-name">Riode Gift</h4>
                                <span class="category-count">
                                    <span>29</span> Products
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="banner-group container-fluid mt-10 pt-6 pb-8 mb-10 appear-animate">
                    <div class="owl-carousel owl-theme row cols-lg-2 cols-1" data-owl-options="{
                        'items': 2,
                        'dots': false,
                        'autoplay': true,
                        'loop': false,
                        'margin': 10,
                        'responsive': {
                            '0': {
                                'items': 1
                            },
                            '992': {
                                'items': 2
                            }
                        }
                    }">
                        <div class="banner1 banner banner-fixed overlay-effect1">
                            <figure style=" background-color:#27262b">
                                <img src="images/demos/demo19/banner/4.jpg" alt="banner" width="881" height="150" />
                            </figure>
                            <div class="banner-content y-50">
                                <h4 class="banner-subtitle text-uppercase text-body mb-0">
                                    New Arrivals
                                </h4>
                                <h3 class="banner-title font-weight-bolder ls-m mb-0" data-animation-options="{
                                    'name': 'blurIn',
                                    'delay': '.4s'
                                }">Season Training Shoes</h3>
                                <hr class="bg-grey border-no">
                                <h4 class="font-weight-normal mb-0 ls-normal">Only from <span class="text-primary font-weight-semi-bold">$78.99</span>
                                </h4>
                            </div>
                        </div>
                        <div class="banner2 banner banner-fixed overlay-effect1">
                            <figure style="background-color: #231f1c">
                                <img src="images/demos/demo19/banner/5.jpg" alt="banner" width="881" height="150" />
                            </figure>
                            <div class="banner-content y-50">
                                <h4 class="banner-subtitle text-uppercase mb-0">
                                    Top Products
                                </h4>
                                <h3 class="banner-title font-weight-bolder ls-m mb-0 appear-animate text-white" data-animation-options="{
                                    'name': 'blurIn',
                                    'delay': '.4s'
                                }">Suitable Women Wear</h3>
                                <hr class="bg-grey border-no">
                                <h4 class="font-weight-normal mb-0 ls-normal">Only from <span class="text-primary font-weight-semi-bold">$121.99</span>
                                </h4>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="product-wrapper grey-section pt-10 pb-6 appear-animate">
                    <div class="container-fluid mb-10">
                        <h2 class="title title-simple text-center pt-8">Shop shoes</h2>
                        <div class="owl-carousel owl-theme row owl-dot-grey cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2" data-owl-options="{
                            'items': 6,
                            'margin': 20,
                            'loop': false,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 5
                                },
                                '1200': {
                                    'items': 6,
                                    'dots': false
                                }
                            }
                        }">
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="demo19-product.html">
                                        <img src="images/demos/demo19/products/7.jpg" alt="product" width="280" height="315">
                                        <img src="images/demos/demo19/products/7-1.jpg" alt="product" width="300" height="338">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-sale">27% off</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="demo19-product.html">Fashion Football Boots</a>
                                    </h3>
                                    <div class="product-price">
                                        <ins class="new-price">$199.00</ins><del class="old-price">$210.00</del>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="demo19-product.html">
                                        <img src="images/demos/demo19/products/8.jpg" alt="product" width="280" height="315">
                                        <img src="images/demos/demo19/products/8-1.jpg" alt="product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="demo19-product.html">White Fashion Training Shoes</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$200.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="demo19-product.html">
                                        <img src="images/demos/demo19/products/9.jpg" alt="product" width="280" height="315">
                                        <img src="images/demos/demo19/products/9-1.jpg" alt="product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="demo19-product.html">Blue Training Sneaker</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$200.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="demo19-product.html">
                                        <img src="images/demos/demo19/products/10.jpg" alt="product" width="280" height="315">
                                        <img src="images/demos/demo19/products/10-1.jpg" alt="product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="demo19-product.html">Black Suede Training Shoes</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$200.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="demo19-product.html">
                                        <img src="images/demos/demo19/products/11.jpg" alt="product" width="280" height="315">
                                        <img src="images/demos/demo19/products/11-1.jpg" alt="product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="demo19-product.html">Fashion Football Boots</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$200.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product text-center">
                                <figure class="product-media">
                                    <a href="demo19-product.html">
                                        <img src="images/demos/demo19/products/12.jpg" alt="product" width="280" height="315">
                                        <img src="images/demos/demo19/products/12-1.jpg" alt="product" width="300" height="338">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <h3 class="product-name">
                                        <a href="demo19-product.html">Brown Leather Training Shoes</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$200.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="banner video-banner parallax" data-parallax-options="{'speed': 3, 'offset': -40}" data-image-src="images/demos/demo19/video.jpg" style="background-color: #292e32">
                    <div class="banner-content appear-animate text-center pr-4 pl-4">
                        <h4 class="banner-subtitle ls-s font-secondary text-white text-uppercase appear-animate" data-animation-options="{
                            'name': 'fadeInDownShorter'
                        }">Brand Experience</h4>
                        <h3 class="banner-title text-white text-uppercase font-weight-bold mb-5 appear-animate" data-animation-options="{
                            'name': 'blurIn',
                            'delay': '.4s',
                            'duration': '1.4s'
                        }">Premium for the pros 2021</h3>
                        <a class="btn-play btn-iframe text-white appear-animate" data-animation-options="{
                            'name': 'fadeIn',
                            'delay': '.8s'
                        }" href="video/memory-of-a-woman.mp4">
                            <i class="d-icon-play-solid ml-0"></i>
                        </a>
                    </div>
                </section>
                <section class="product-wrapper container-fluid pt-10 appear-animate">
                    <h2 class="title title-simple text-center pt-7">Featured Products</h2>
                    <div class="owl-carousel owl-theme row owl-dot-grey cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2" data-owl-options="{
                        'items': 6,
                        'margin': 20,
                        'loop': false,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '576': {
                                'items': 3
                            },
                            '768': {
                                'items': 4
                            },
                            '992': {
                                'items': 5
                            },
                            '1200': {
                                'items': 6,
                                'dots': false
                            }
                        }
                    }">
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="demo19-product.html">
                                    <img src="images/demos/demo19/products/3.jpg" alt="product" width="300" height="338">
                                    <img src="images/demos/demo19/products/3-1.jpg" alt="product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo19-product.html">Beyond Riode Original Backpack</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$200.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="demo19-product.html">
                                    <img src="images/demos/demo19/products/14.jpg" alt="product" width="300" height="338">
                                    <img src="images/demos/demo19/products/14-1.jpg" alt="product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo19-product.html">Black Bluetooth Watch</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$200.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="demo19-product.html">
                                    <img src="images/demos/demo19/products/15.jpg" alt="product" width="300" height="338">
                                    <img src="images/demos/demo19/products/15-1.jpg" alt="product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo19-product.html">Blue Elctronic Watch</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$200.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="demo19-product.html">
                                    <img src="images/demos/demo19/products/16.jpg" alt="product" width="300" height="338">
                                    <img src="images/demos/demo19/products/16-1.jpg" alt="product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo19-product.html">Blue Winter Gloves</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$200.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="demo19-product.html">
                                    <img src="images/demos/demo19/products/17.jpg" alt="product" width="300" height="338">
                                    <img src="images/demos/demo19/products/17-1.jpg" alt="product" width="300" height="338">
                                </a>
                                <div class="product-label-group">
                                    <label class="product-label label-new">new</label>
                                </div>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo19-product.html">Blue Winter Wear</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$200.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                        <div class="product text-center">
                            <figure class="product-media">
                                <a href="demo19-product.html">
                                    <img src="images/demos/demo19/products/18.jpg" alt="product" width="300" height="338">
                                    <img src="images/demos/demo19/products/18-1.jpg" alt="product" width="300" height="338">
                                </a>
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                </div>
                            </figure>
                            <div class="product-details">
                                <h3 class="product-name">
                                    <a href="demo19-product.html">Brown Watch</a>
                                </h3>
                                <div class="product-price">
                                    <span class="price">$200.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width:100%"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <a href="demo19-product.html" class="rating-reviews">( 6 reviews )</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="pt-10 appear-animate" style="margin-bottom: -1px;">
                    <h2 class="title title-simple text-center pt-3">Instagram</h2>
                    <div class="owl-carousel owl-theme row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2 gutter-no" data-owl-options="{
                        'items': 6,
                        'nav': false,
                        'loop': true,
                        'dots': false,
                        'margin': 0,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '576': {
                                'items': 3
                            },
                            '768': {
                                'items': 4
                            },
                            '992': {
                                'items': 5
                            },
                            '1200': {
                                'items': 6
                            }
                        }
                    }">

                        <figure class="instagram appear-animate" data-animation-options="{
                            'name': 'fadeIn'
                        }">
                            <a href="#">
                                <img src="images/demos/demo19/instagram/1.jpg" alt="Instagram" width="220" height="220" />
                            </a>
                        </figure>
                        <figure class="instagram appear-animate" data-animation-options="{
                            'name': 'fadeIn'
                        }">
                            <a href="#">
                                <img src="images/demos/demo19/instagram/2.jpg" alt="Instagram" width="220" height="220" />
                            </a>
                        </figure>
                        <figure class="instagram appear-animate" data-animation-options="{
                            'name': 'fadeIn'
                        }">
                            <a href="#">
                                <img src="images/demos/demo19/instagram/3.jpg" alt="Instagram" width="220" height="220" />
                            </a>
                        </figure>
                        <figure class="instagram appear-animate" data-animation-options="{
                            'name': 'fadeIn'
                        }">
                            <a href="#">
                                <img src="images/demos/demo19/instagram/4.jpg" alt="Instagram" width="220" height="220" />
                            </a>
                        </figure>
                        <figure class="instagram appear-animate" data-animation-options="{
                            'name': 'fadeIn'
                        }">
                            <a href="#">
                                <img src="images/demos/demo19/instagram/5.jpg" alt="Instagram" width="220" height="220" />
                            </a>
                        </figure>
                        <figure class="instagram appear-animate" data-animation-options="{
                            'name': 'fadeIn'
                        }">
                            <a href="#">
                                <img src="images/demos/demo19/instagram/6.jpg" alt="Instagram" width="220" height="220" />
                            </a>
                        </figure>
                    </div>
                </section>
            </div>

        </main>
        <footer class="footer appear-animate" data-animation-options="{ 'delay': '.2s' }">
            <div class="footer-middle">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="widget widget-about">
                                <a href="demo19.html" class="logo-footer mb-5">
                                    <img src="{{ asset('ui/frontend/images/demos/demo19/logo-footer.png')}}" alt="logo-footer" width="154" height="43" />
                                </a>
                                <div class="widget-body">
                                    <p class="ls-s">Fringilla urna porttitor rhoncus dolor purus<br />
                                        luctus venenatis lectus magna fringilla diam<br />
                                        maecenas ultricies mi eget mauris.</p>
                                    <a href="mailto:mail@riode.com">Riode@example.com</a>
                                </div>
                            </div>
                            <!-- End of Widget -->
                        </div>
                        <div class="col-xl-2 col-lg-4 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Account</h4>
                                <ul class="widget-body">
                                    <li><a href="account.html">My Account</a></li>
                                    <li><a href="#">Our Guarantees</a></li>
                                    <li><a href="#">Terms And Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Intellectual Property Claims</a></li>
                                    <li><a href="#">Site Map</a></li>
                                </ul>
                            </div>
                            <!-- End of Widget -->
                        </div>
                        <div class="col-xl-2 col-lg-4 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">Get Help</h4>
                                <ul class="widget-body">
                                    <li><a href="#">Shipping &amp; Delivery</a></li>
                                    <li><a href="#">Order Status</a></li>
                                    <li><a href="#">Brand</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Payment Options</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- End of Widget -->
                        </div>
                        <div class="col-xl-2 col-lg-4 col-sm-6">
                            <div class="widget">
                                <h4 class="widget-title">About Us</h4>
                                <ul class="widget-body">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Custom Service</a></li>
                                    <li><a href="#">Terms &amp; Condition</a></li>
                                    <li><a href="#">Site Map</a></li>
                                </ul>
                            </div>
                            <!-- End of Widget -->
                        </div>
                        <div class="col-xl-3 col-lg-8">
                            <div class="widget mb-4">
                                <h4 class="widget-title">Subscribe to our newsletter</h4>
                                <div class="widget-body widget-newsletter mt-1">
                                    <form action="#" class="input-wrapper input-wrapper-inline mb-5">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email address here..." required />
                                        <button class="btn btn-primary font-weight-bold" type="submit">subscribe <i class="d-icon-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="footer-info d-flex align-items-center justify-content-between">
                                <figure class="payment">
                                    <img src="{{ asset('ui/frontend/images/demos/demo4/payment.png')}}" alt="payment" width="135" height="24" />
                                </figure>
                                <div class="social-links">
                                    <a href="#" title="social-link" class="social-link social-facebook fab fa-facebook-f"></a>
                                    <a href="#" title="social-link" class="social-link social-twitter fab fa-twitter"></a>
                                    <a href="#" title="social-link" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of FooterMiddle -->
            <div class="footer-bottom d-block text-center">
                <p class="copyright">Riode eCommerce &copy; 2021. All Rights Reserved</p>
            </div>
            <!-- End of FooterBottom -->
        </footer>
        <!-- End Footer -->
    </div>
    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo19.html" class="sticky-link">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="demo19-shop.html" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        <a href="wishlist.html" class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>Wishlist</span>
        </a>
        <a href="account.html" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>Account</span>
        </a>
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>Search</span>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit" title="submit-button">
                    <i class="d-icon-search"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off" placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit" title="submit-button">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="demo19.html">Home</a>
                </li>
                <li>
                    <a href="demo19-shop.html">Categories</a>
                    <ul>
                        <li>
                            <a href="#">
                                Variations 1
                            </a>
                            <ul>
                                <li><a href="shop-classic-filter.html">Classic Filter</a></li>
                                <li><a href="shop-left-toggle-sidebar.html">Left Toggle Filter</a></li>
                                <li><a href="shop-right-toggle-sidebar.html">Right Toggle Sidebar</a></li>
                                <li><a href="shop-horizontal-filter.html">Horizontal Filter </a>
                                </li>
                                <li><a href="shop-navigation-filter.html">Navigation Filter</a></li>

                                <li><a href="shop-off-canvas-filter.html">Off-Canvas Filter </a></li>
                                <li><a href="shop-top-banner.html">Top Banner</a></li>
                                <li><a href="shop-inner-top-banner.html">Inner Top Banner</a></li>
                                <li><a href="shop-with-bottom-block.html">With Bottom Block</a></li>
                                <li><a href="shop-category-in-page-header.html">Category In Page Header</a>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Variations 2
                            </a>
                            <ul>
                                <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                <li><a href="shop-list-mode.html">List Mode</a></li>
                                <li><a href="shop-pagination.html">Pagination</a></li>
                                <li><a href="shop-infinite-ajaxscroll.html">Infinite Ajaxscroll </a></li>
                                <li><a href="shop-loadmore-button.html">Loadmore Button</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Variations 3
                            </a>
                            <ul>
                                <li><a href="shop-category-grid-shop.html">Category Grid Shop</a></li>
                                <li><a href="shop-category+products.html">Category + Products</a></li>
                                <li><a href="shop-default-1.html">Shop Default 1 </a>
                                </li>
                                <li><a href="shop-default-2.html">Shop Default 2</a></li>
                                <li><a href="shop-default-3.html">Shop Default 3</a></li>
                                <li><a href="shop-default-4.html">Shop Default 4</a></li>
                                <li><a href="shop-default-5.html">Shop Default 5</a></li>
                                <li><a href="shop-default-6.html">Shop Default 6</a></li>
                                <li><a href="shop-default-7.html">Shop Default 7</a></li>
                                <li><a href="shop-default-8.html">Shop Default 8</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="demo19-product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Product Pages</a>
                            <ul>
                                <li><a href="product-simple.html">Simple Product</a></li>
                                <li><a href="product-featured.html">Featured &amp; On Sale</a></li>
                                <li><a href="product.html">Variable Product</a></li>
                                <li><a href="product-variable-swatch.html">Variation Swatch
                                        Product</a></li>
                                <li><a href="product-grouped.html">Grouped Product </a></li>
                                <li><a href="product-external.html">External Product</a></li>
                                <li><a href="product-in-stock.html">In Stock Product</a></li>
                                <li><a href="product-out-stock.html">Out of Stock Product</a></li>
                                <li><a href="product-upsell.html">Upsell Products</a></li>
                                <li><a href="product-cross-sell.html">Cross Sell Products</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layouts</a>
                            <ul>
                                <li><a href="product-vertical.html">Vertical Thumb</a></li>
                                <li><a href="product-horizontal.html">Horizontal Thumb</a></li>
                                <li><a href="product-gallery.html">Gallery Type</a></li>
                                <li><a href="product-grid.html">Grid Images</a></li>
                                <li><a href="product-masonry.html">Masonry Images</a></li>
                                <li><a href="product-sticky.html">Sticky Info</a></li>
                                <li><a href="product-sticky-both.html">Left & Right Sticky</a></li>
                                <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                                <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                                <li><a href="product-full.html">Full Width Layout </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Features</a>
                            <ul>
                                <li><a href="product-sale.html">Sale Countdown</a></li>
                                <li><a href="product-hurryup.html">Hurry Up Notification </a></li>
                                <li><a href="product-attribute-guide.html">Attribute Guide </a></li>
                                <li><a href="product-sticky-cart.html">Add Cart Sticky</a></li>
                                <li><a href="product-thumbnail-label.html">Labels on Thumbnail</a>
                                </li>
                                <li><a href="product-more-description.html">More Description
                                        Tabs</a></li>
                                <li><a href="product-accordion-data.html">Data In Accordion</a></li>
                                <li><a href="product-tabinside.html">Data Inside</a></li>
                                <li><a href="product-video.html">Video Thumbnail </a>
                                </li>
                                <li><a href="product-360-degree.html">360 Degree Thumbnail </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="about-us.html">About</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="account.html">Login</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="error-404.html">Error 404</a>
                            <ul>
                                <li><a href="error-404.html">Error 404-1</a></li>
                                <li><a href="error-404-1.html">Error 404-2</a></li>
                                <li><a href="error-404-2.html">Error 404-3</a></li>
                                <li><a href="error-404-3.html">Error 404-4</a></li>
                            </ul>
                        </li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog-classic.html">Blog</a>
                    <ul>
                        <li><a href="blog-classic.html">Classic</a></li>
                        <li><a href="blog-listing.html">Listing</a></li>
                        <li>
                            <a href="#">Grid</a>
                            <ul>
                                <li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
                                <li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
                                <li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                            <ul>
                                <li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
                                <li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
                                <li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Mask</a>
                            <ul>
                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="post-single.html">Single Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="element.html">Elements</a>
                    <ul>
                        <li>
                            <a href="#">Elements 1</a>
                            <ul>
                                <li><a href="element-accordions.html">Accordions</a></li>
                                <li><a href="element-alerts.html">Alert &amp; Notification</a></li>

                                <li><a href="element-banner-effect.html">Banner Effect

                                    </a></li>
                                <li><a href="element-banner.html">Banner
                                    </a></li>
                                <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                <li><a href="element-breadcrumb.html">Breadcrumb
                                    </a></li>
                                <li><a href="element-buttons.html">Buttons</a></li>
                                <li><a href="element-cta.html">Call to Action</a></li>
                                <li><a href="element-countdown.html">Countdown
                                    </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 2</a>
                            <ul>
                                <li><a href="element-counter.html">Counter </a></li>
                                <li><a href="element-creative-grid.html">Creative Grid

                                    </a></li>
                                <li><a href="element-animation.html">Entrance Effect

                                    </a></li>
                                <li><a href="element-floating.html">Floating

                                    </a></li>
                                <li><a href="element-hotspot.html">Hotspot

                                    </a></li>
                                <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                <li><a href="element-icons.html">Icons</a></li>
                                <li><a href="element-image-box.html">Image box

                                    </a></li>
                                <li><a href="element-instagrams.html">Instagrams</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 3</a>
                            <ul>

                                <li><a href="element-categories.html">Product Category</a></li>
                                <li><a href="element-products.html">Products</a></li>
                                <li><a href="element-product-banner.html">Products + Banner

                                    </a></li>
                                <li><a href="element-product-grid.html">Products + Grid

                                    </a></li>
                                <li><a href="element-product-single.html">Product Single

                                    </a>
                                </li>
                                <li><a href="element-product-tab.html">Products + Tab

                                    </a></li>
                                <li><a href="element-single-product.html">Single Product

                                    </a></li>
                                <li><a href="element-slider.html">Slider

                                    </a></li>
                                <li><a href="element-social-link.html">Social Icons </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 4</a>
                            <ul>
                                <li><a href="element-subcategory.html">Subcategory

                                    </a></li>
                                <li><a href="element-svg-floating.html">Svg Floating

                                    </a></li>
                                <li><a href="element-tabs.html">Tabs</a></li>
                                <li><a href="element-testimonials.html">Testimonials
                                    </a></li>
                                <li><a href="element-titles.html">Title</a></li>
                                <li><a href="element-typography.html">Typography</a></li>
                                <li><a href="element-vendor.html">Vendor

                                    </a></li>
                                <li><a href="element-video.html">Video

                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="https://d-themes.com/buynow/riodehtml">Buy Riode!</a></li>
            </ul>
            <!-- End MobileMenu -->
        </div>
    </div>

    <!-- newsletter-popup type2 -->
    <div class="newsletter-popup newsletter-pop2 mfp-hide" id="newsletter-popup">
        <figure>
            <img src="images/newsletter-popup2.jpg" width="500" height="264" alt="newsletter2" />
        </figure>
        <div class="newsletter-content">
            <h2 class="font-weight-bolder">Join Our Mailing List</h2>
            <p class="text-grey">Stay Informed!Monthly Tips and Discount.</p>
            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
                <input type="email" class="form-control email" name="email" id="email2" placeholder="Email address here..." required="">
                <button class="btn btn-dark" type="submit">SUBMIT</button>
            </form>
            <div class="form-checkbox justify-content-center">
                <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup" required />
                <label for="hide-newsletter-popup">Don't show this popup again</label>
            </div>
            <div class="social-links">
                <a href="#" title="social-link" class="social-link social-facebook fab fa-facebook-f"></a>
                <a href="#" title="social-link" class="social-link social-twitter fab fa-twitter"></a>
                <a href="#" title="social-link" class="social-link social-linkedin fab fa-linkedin-in"></a>
            </div>
        </div>
    </div>

    <!-- sticky icons-->
    <div class="sticky-icons-wrapper">
        <div class="sticky-icon-links">
            <ul>
                <li><a href="#" class="demo-toggle"><i class="fas fa-home"></i><span>Demos</span></a></li>
                <li><a href="documentation.html"><i class="fas fa-info-circle"></i><span>Documentation</span></a>
                </li>
                <li><a href="https://themeforest.net/downloads/"><i class="fas fa-star"></i><span>Reviews</span></a>
                </li>
                <li><a href="https://d-themes.com/buynow/riodehtml"><i class="fas fa-shopping-cart"></i><span>Buy
                            now!</span></a></li>
            </ul>
        </div>
        <div class="demos-list">
            <div class="demos-overlay"></div>
            <a class="demos-close" href="#"><i class="close-icon"></i></a>
            <div class="demos-content scrollable scrollable-light">
                <h3 class="demos-title">Demos</h3>
                <div class="demos">
                </div>
            </div>
        </div>
    </div>
    <!-- Plugins JS File -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/parallax/parallax.min.js"></script>
    <script src="vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <!-- Main JS File -->
    <script src="js/main.min.js"></script>

    <!-- Plugins JS File -->
    <script src="{{ asset('ui/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/vendor/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/vendor/elevatezoom/jquery.elevatezoom.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('ui/frontend/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('ui/frontend/js/main.min.js') }}"></script>
</body>

</html>