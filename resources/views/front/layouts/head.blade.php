    <!--====================  header area ====================-->
    <div class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--=======  header wrapper  =======-->
                    <div class="header-wrapper d-none d-lg-flex">
                        <!-- logo -->
                        <div class="logo">
                            <a href="{{route('homepage')}}">
                                <img src="assets/img/logo.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <!-- menu wrapper -->
                        <div class="navigation-menu-wrapper">
                            <nav>
                                <ul>
                                    <li class="menu-item-has-children"><a href="index.html">HOME</a>
                                        <ul class="sub-menu">
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children"><a href="#">PAGES</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"><a href="#">Page List One</a>
                                                <ul class="sub-menu">
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">page list two</a>
                                                <ul class="sub-menu">
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="login-register.html">Login Register</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Page list three</a>
                                                <ul class="sub-menu">
                                                    <li><a href="compare.html">Compare</a></li>
                                                    <li><a href="">Contact</a></li>
                                                    <li><a href="about.html">About Us</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children"><a href="shop-left-sidebar.html">SHOP</a>
                                        <ul class="mega-menu four-column">
                                            <li><a href="#">Shop Grid</a>
                                                <ul>
                                                    <li><a href="shop-3-column.html">shop 3 column</a></li>
                                                    <li><a href="shop-4-column.html">shop 4 column</a></li>
                                                    <li><a href="shop-left-sidebar.html">shop left sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-list-left-sidebar.html">Shop List</a>
                                                <ul>
                                                    <li><a href="shop-list.html">shop List</a></li>
                                                    <li><a href="shop-list-left-sidebar.html">shop List Left Sidebar</a></li>
                                                    <li><a href="shop-list-right-sidebar.html">shop List Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="single-product.html">Single Product</a>
                                                <ul>
                                                    <li><a href="single-product.html">Single Product</a></li>
                                                    <li><a href="single-product-variable.html">Single Product variable</a></li>
                                                    <li><a href="single-product-affiliate.html">Single Product affiliate</a></li>
                                                    <li><a href="single-product-group.html">Single Product group</a></li>
                                                    <li><a href="single-product-tabstyle-2.html">Tab Style 2</a></li>
                                                    <li><a href="single-product-tabstyle-3.html">Tab Style 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="single-product.html">Single Product</a>
                                                <ul>
                                                    <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                                    <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                                    <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                                    <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                                    <li><a href="single-product-slider-box.html">Slider Box</a></li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-banner d-none d-lg-block mt-30 w-100">
                                                <a href="shop-left-sidebar.html" class="mb-0">
                                                    <img src="assets/img/banners/img-bottom-menu.jpg" class="img-fluid" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children"><a href="blog-left-sidebar.html">BLOG</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-post-left-sidebar.html">Blog Post Left Sidebar</a></li>
                                            <li><a href="blog-post-right-sidebar.html">Blog Post Right Sidebar</a></li>
                                            <li><a href="blog-post-image-format.html">Blog Post Image Format</a></li>
                                            <li><a href="blog-post-image-gallery.html">Blog Post Image Gallery</a></li>
                                            <li><a href="blog-post-audio-format.html">Blog Post Audio Format</a></li>
                                            <li><a href="blog-post-video-format.html">Blog Post Video Format</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="{{route("contact")}}">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- header icon -->
                        <div class="header-icon-wrapper">
                            <ul class="icon-list">
                                <li>
                                    <a href="javascript:void(0)" id="search-overlay-trigger">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </li>
                                <li>
                                    <div class="header-cart-icon">
                                        <a href="{{route('cart')}}">
                                            <i class="ion-bag"></i>
                                            <span class="counter"></span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-settings-icon">
                                        <a href="javascript: openLoginModal()">
                                            <!-- <div class="setting-button">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div> -->
                                           <h4 class="title">Login/Signup</h4>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--=======  End of header wrapper  =======-->

                    <!--=======  mobile navigation area  =======-->

                    <div class="header-mobile-navigation d-block d-lg-none">
                        <div class="row align-items-center">
                            <div class="col-6 col-md-6">
                                <div class="header-logo">
                                    <a href="index.html">
                                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="mobile-navigation text-right">
                                    <div class="header-icon-wrapper">
                                        <ul class="icon-list justify-content-end">
                                            <li>
                                                <div class="header-cart-icon">
                                                    <a href="cart.html">
                                                        <i class="ion-bag"></i>
                                                        <span class="counter">3</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" class="mobile-menu-icon" id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--=======  End of mobile navigation area  =======-->

                </div>
            </div>
        </div>
    </div>
    
    <!--====================  End of header area  ====================-->
  

