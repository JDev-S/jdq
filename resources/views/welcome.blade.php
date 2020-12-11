<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DQ</title>
    <link rel="shortcut icon" type="image/png" href="\img\favicon.png">

    <link href="css.css?family=Barlow:400,700&display=swap" rel="stylesheet">
    <link href="css-1.css?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="\fonts\fontawesome\font-awesome.min.css">
    <link rel="stylesheet" href="\fonts\linearicons\linearicons.css">
    <link rel="stylesheet" href="\fonts\themify-icons\themify-icons.css">

    <link rel="stylesheet" href="\vendors\transition-wow\transition.css">
    <link rel="stylesheet" href="\vendors\slick\slick-theme.css">
    <link rel="stylesheet" href="\vendors\slick\slick.css">

    <link rel="stylesheet" href="\css\bootstrap.min.css">
    <link rel="stylesheet" href="\css\style.css">
</head>

<body>
    <!-- BOX MOBILE MENU  -->
    <div class="box-mobile-menu">
        <span class="box-title"><img src="\img\dq_logo.png" alt="_img logo" width="100px" height="100px"></span>
        <a href="javascript:void(0)" class="close-menu" id="pull-closemenu">
            <i class="lnr lnr-cross"></i>
        </a>
        <ul class="nav justify-content-center social-icon">
            <li class="nav-item"><a href="javascript:void(0)" class="nav-link"><i class="fa fa-facebook-f"></i></a></li>
            <li class="nav-item"><a href="javascript:void(0)" class="nav-link"><i class="fa fa-twitter"></i></a></li>
            <li class="nav-item"><a href="javascript:void(0)" class="nav-link"><i class="fa fa-pinterest-p"></i></a></li>
            <li class="nav-item"><a href="javascript:void(0)" class="nav-link"><i class="fa fa-youtube"></i></a></li>
            <li class="nav-item"><a href="javascript:void(0)" class="nav-link"><i class="fa fa-instagram"></i></a></li>
        </ul>
        <div class="menu-clone">
            <ul class="main-menu">

                <li class="menu-item menu-item-has-children">
                    <a href="/" class="nav-link top-nav-link">Inicio</a>

                </li>

                <li class="menu-item menu-item-has-children">
                    <a href="/acercade" class="nav-link top-nav-link">Acerca de</a>

                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="javascript:void(0)" class="slide-dropdown">Catálogo <span class="lnr lnr-chevron-right down"></span></a>
                    <div class="submenu">
                        <ul class="menu-shop-style">
                            <?php
                            $query2 = "select * from categoria where eliminado!=1 ";
                            $data2=DB::select($query2);
                            ?>
                            @foreach($data2 as $item)
                            <li class="style-item"><a class="menu-link nav-link" href="/tienda/1/{{$item->id_categoria}}">{{$item->nombre_categoria}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="/contacto" class="nav-link top-nav-link">Contacto</a>
                </li>

            </ul>
            <div class="image-effect ">
                <a href="javascript:void()0">
                    <img src="\img\banner-menu.jpg" alt="_img banner menu" class="img-fluid w-100">
                </a>
            </div>
        </div>
    </div>
    <div class="menu-overlay"></div>

    <!-- box search mobile -->
    <div class="form-search__destop">
        <form action="/search" method="POST" role="search" class="mobile-nav-search-form">
            <div class="search">
                <span class="lnr lnr-magnifier"></span>
            </div>
            <div class="mobile-nav-search-close">
                <span class="lnr lnr-cross"></span>
            </div>
            <input type="search" name="search" class="input-block-level search-query" placeholder="Search" autocomplete="off" data-old-term="search">
            <div class="autocomplete-results">
                <ul class="ui-autocomplete ui-front"></ul>
            </div>
            <input type="hidden" name="type" value="product">
        </form>
    </div>

    <!-- add to cart  -->
    <div class="js-cart-popup product-checkout">
        <div class="mini-content ">
            <h3 class="mini-cart-title text-center">Your Cart</h3>
            <span class="minicart-numbers-items">1</span>
            <span class="closebtn">&times;</span>
            <div class="prod">
                <div class="product-cart ">
                    <ol class="minicart-item" style="list-style: none">
                        <li class="product-cart-item">
                            <a href="javascript:void(0)" class="product-media"><img class="img-fluid" width="100" height="100" src="\img\12.jpg" alt="_img-add to cart"></a>
                        </li>
                        <li class="product-detail">
                            <h3 class="product-name">
                                <a href="javascript:void(0)">Wilfred Madine Blouse</a>
                            </h3>
                            <div class="product-detail-info">
                                <span class="product-quantity">Women's Tank : </span>
                                <span class="product-cost">$115</span>
                            </div>
                        </li>
                        <li class="product-remove">
                            <span class="remove-product">&times;</span>
                        </li>
                    </ol>
                </div>
            </div>

        </div>
    </div>

    <div class="js-bg bg-canvas-overlay"></div>
    <!-- search popup -->
    <div class="search-destop">
        <div class="js-box-search search-eurotas">
            <div class="drawer-search-top">
                <h3 class="drawer-search-heading">Type the keyword or SKU</h3>
            </div>
            <form action="/search" class="form-search" method="POST">
                <input type="search" name="search" placeholder="Search anything" class="input-search">
                <button type="submit">
                    <i class="lnr lnr-magnifier"></i>
                </button>
            </form>
            <div class="close-search">
                <a href="javascript:void(0)" class="js-close-search lnr lnr-cross"></a>
            </div>
        </div>
        <div class="bg-search">
        </div>
    </div>
    <!-- POPUP LOGIN -->

    <!-- POPUP REGISTER -->
    <!-- MENU POPUP -->
    <header class="js-header header-v2 header-destop ">
        <div class="my-container">
            <div class="row  align-items-center justify-content-between">
                <div class="col-xl-8 col-lg-8">
                    <div class="row align-items-center">
                        <div class="col-4__header-home2 logo">
                            <a href="/"><img src="\img\dq_logo.png" alt="_img-logo" width="112" height="80"></a>
                        </div>
                        <div class="col-8__header-home2 navbar-home2">
                            <ul class="nav">
                                <!--<li class="nav-item top-nav-items">
                                    <a href="javascript:void(0)" class="js-menu-header nav-link top-nav-link">Home</a>
                                    <div class="submenu-header">
                                        <div class="my-container">
                                            <div class="row">
                                                <div class="col-3">
                                                    <ul>
                                                        <li><a href="homepage-v1.html">Home 1</a></li>
                                                        <li><a href="homepage-v2.html">Home 2</a></li>
                                                        <li><a href="homepage-v3.html">Home 3</a></li>
                                                        <li><a href="homepage-v4.html">Home 4</a></li>
                                                        <li><a href="homepage-v5.html">Home 5</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-3">
                                                    <h4>Product</h4>
                                                    <ul>
                                                        <li><a href="product-detail-v1.html">Product Detail 1</a></li>
                                                        <li><a href="product-detail-v2.html">Product Detail 2</a></li>
                                                        <li><a href="product-detail-v3.html">Product Detail 3</a></li>
                                                    </ul>
                                                    <h4 class="mt-3">
                                                        Our Blog
                                                    </h4>
                                                    <ul>
                                                        <li><a href="our-blog-v1.html">Our Blog 1</a></li>
                                                        <li><a href="our-blog-v2.html">Our Blog 2</a></li>
                                                        <li><a href="blog-post.html">Blog Post</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-3">
                                                    <h4>Collection</h4>
                                                    <ul>
                                                        <li><a href="grid-slidebar-left.html">Grid Slidebar Left</a></li>
                                                        <li><a href="list-slidebar-left.html">List Slidebar Left</a></li>
                                                        <li><a href="shop-page.html">Shop Page</a></li>
                                                    </ul>
                                                    <h4 class="mt-3">
                                                        Page
                                                    </h4>
                                                    <ul>
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="#">wishlist</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-3">
                                                    <div class="img image-effect">
                                                        <a href="javascript:void(0)"><img src="\img\banner-submenu.jpg" alt="_img banner submenu" class="img-fluid w-100"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>-->
                                <!--<li class="nav-item top-nav-items">
                                    <a href="javascript:void(0)" class="nav-link top-nav-link">Men</a>
                                    <div class="submenu-header">
                                        <div class="my-container">
                                            <div class="row">
                                                <div class="col-3">
                                                    <ul>
                                                        <li><a href="javascript:void(0)">New Arrival</a></li>
                                                        <li><a href="javascript:void(0)">Best Sellers</a></li>
                                                        <li><a href="javascript:void(0)">Release Dates</a></li>
                                                        <li><a href="javascript:void(0)">Resolution Ready</a></li>
                                                        <li><a href="javascript:void(0)">Sale</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-3">
                                                    <h4>Shoes</h4>
                                                    <ul>
                                                        <li><a href="javascript:void(0)">SNKRS Launch Calendar</a></li>
                                                        <li><a href="javascript:void(0)">Life style</a></li>
                                                        <li><a href="javascript:void(0)">Running</a></li>
                                                        <li><a href="javascript:void(0)">Training & Gym</a></li>
                                                        <li><a href="javascript:void(0)">Basketball</a></li>
                                                        <li><a href="javascript:void(0)">Jordan</a></li>
                                                        <li><a href="javascript:void(0)">Football</a></li>
                                                        <li><a href="javascript:void(0)">Soccer</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-3">
                                                    <h4>Clothing</h4>
                                                    <ul>
                                                        <li><a href="javascript:void(0)">Tops & T-Shirts</a></li>
                                                        <li><a href="javascript:void(0)">Shorts</a></li>
                                                        <li><a href="javascript:void(0)">Polos</a></li>
                                                        <li><a href="javascript:void(0)">Hoodies & Sweatshirts</a></li>
                                                        <li><a href="javascript:void(0)">Jacket & Vests</a></li>
                                                        <li><a href="javascript:void(0)">Pants & Tights </a></li>
                                                        <li><a href="javascript:void(0)">Surt & Swimwear</a></li>
                                                        <li><a href="javascript:void(0)">Nike Pro & Compression</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-3">
                                                    <div class="img image-effect">
                                                        <a href="javascript:void(0)"><img src="\img\banner-submenu.jpg" alt="_img banner submenu" class="img-fluid w-100"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>-->
                                <!--<li class="nav-item top-nav-items">
                                    <a href="javascript:void(0)" class="nav-link top-nav-link">Women</a>
                                    <div class="submenu-header">
                                        <div class="my-container">
                                            <div class="row">
                                                <div class="col-3">
                                                    <h4>Featured</h4>
                                                    <ul>
                                                        <li><a href="javascript:void(0)">New Arrival</a></li>
                                                        <li><a href="javascript:void(0)">Best Sellers</a></li>
                                                        <li><a href="javascript:void(0)">Release Dates</a></li>
                                                        <li><a href="javascript:void(0)">Sale</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-3">
                                                    <h4>Shoes</h4>
                                                    <ul>
                                                        <li><a href="javascript:void(0)">SNKRS Launch Calendar</a></li>
                                                        <li><a href="javascript:void(0)">Life style</a></li>
                                                        <li><a href="javascript:void(0)">Running</a></li>
                                                        <li><a href="javascript:void(0)">Training & Gym</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-3">
                                                    <h4>Clothing</h4>
                                                    <ul>
                                                        <li><a href="javascript:void(0)">Tops & T-Shirts</a></li>
                                                        <li><a href="javascript:void(0)">Shorts</a></li>
                                                        <li><a href="javascript:void(0)">Polos</a></li>
                                                        <li><a href="javascript:void(0)">Hoodies & Sweatshirts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-3">
                                                    <h4>Sports</h4>
                                                    <ul>
                                                        <li><a href="javascript:void(0)">Running</a></li>
                                                        <li><a href="javascript:void(0)">Soccer</a></li>
                                                        <li><a href="javascript:void(0)">Basketball</a></li>
                                                        <li><a href="javascript:void(0)">Football</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="img-banne image-effectr">
                                                <a href="javascript:void(0)">
                                                    <img src="\img\megamenu-banner2.jpg" alt="_img banner megamenu" class="img-fluid w-100">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>-->
                                <!--<li class="nav-item top-nav-items">
                                    <a href="javascript:void(0)" class="nav-link top-nav-link">Kids</a>
                                    <div class="submenu-header">
                                        <div class="my-container">
                                            <div class="row">
                                                <div class="col-3">
                                                    <ul class="tabs">
                                                        <li class="tabs-link current" data-tab="tab-4">New Arrival</li>
                                                        <li class="tabs-link" data-tab="tab-5">Best Sellers</li>
                                                        <li class="tabs-link" data-tab="tab-6">Release Dates</li>
                                                        <li class="tabs-link" data-tab="tab-7">Resolution Ready</li>
                                                        <li class="tabs-link" data-tab="tab-8">Sale</li>
                                                    </ul>
                                                </div>
                                                <div class="col-9 tab-content current p-0" id="tab-4">
                                                    <div class="row w-100 m-0">
                                                        <div class="col-4">
                                                            <h4>Shoes</h4>
                                                            <ul>
                                                                <li><a href="javascript:void(0)">SNKRS Launch Calendar</a></li>
                                                                <li><a href="javascript:void(0)">Life style</a></li>
                                                                <li><a href="javascript:void(0)">Running</a></li>
                                                                <li><a href="javascript:void(0)">Training & Gym</a></li>
                                                                <li><a href="javascript:void(0)">Basketball</a></li>
                                                                <li><a href="javascript:void(0)">Jordan</a></li>
                                                                <li><a href="javascript:void(0)">Football</a></li>
                                                                <li><a href="javascript:void(0)">Soccer</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <h4>Clothing</h4>
                                                            <ul>
                                                                <li><a href="javascript:void(0)">Tops & T-Shirts</a></li>
                                                                <li><a href="javascript:void(0)">Shorts</a></li>
                                                                <li><a href="javascript:void(0)">Polos</a></li>
                                                                <li><a href="javascript:void(0)">Hoodies & Sweatshirts</a></li>
                                                                <li><a href="javascript:void(0)">Jacket & Vests</a></li>
                                                                <li><a href="javascript:void(0)">Pants & Tights </a></li>
                                                                <li><a href="javascript:void(0)">Surt & Swimwear</a></li>
                                                                <li><a href="javascript:void(0)">Nike Pro & Compression</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="img image-effect">
                                                                <a href="javascript:void(0)"><img src="\img\banner-submenu.jpg" alt="_img banner submenu" class="img-fluid w-100"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9 tab-content p-0" id="tab-5">
                                                    <div class="row w-100 m-0">
                                                        <div class="col-4">
                                                            <h4>Shoes</h4>
                                                            <ul>
                                                                <li><a href="javascript:void(0)">SNKRS Launch Calendar</a></li>
                                                                <li><a href="javascript:void(0)">Life style</a></li>
                                                                <li><a href="javascript:void(0)">Running</a></li>
                                                                <li><a href="javascript:void(0)">Training & Gym</a></li>
                                                                <li><a href="javascript:void(0)">Basketball</a></li>
                                                                <li><a href="javascript:void(0)">Jordan</a></li>
                                                                <li><a href="javascript:void(0)">Football</a></li>
                                                                <li><a href="javascript:void(0)">Soccer</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <h4>Clothing</h4>
                                                            <ul>
                                                                <li><a href="javascript:void(0)">Tops & T-Shirts</a></li>
                                                                <li><a href="javascript:void(0)">Shorts</a></li>
                                                                <li><a href="javascript:void(0)">Polos</a></li>
                                                                <li><a href="javascript:void(0)">Hoodies & Sweatshirts</a></li>
                                                                <li><a href="javascript:void(0)">Jacket & Vests</a></li>
                                                                <li><a href="javascript:void(0)">Pants & Tights </a></li>
                                                                <li><a href="javascript:void(0)">Surt & Swimwear</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="img ">
                                                                <a href="javascript:void(0)"><img src="\img\banner-submenu.jpg" alt="_img banner submenu" class="img-fluid w-100"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9 tab-content p-0" id="tab-6">
                                                    <div class="row w-100 m-0">
                                                        <div class="col-4">
                                                            <h4>Featured</h4>
                                                            <ul>
                                                                <li><a href="javascript:void(0)">New Arrival</a></li>
                                                                <li><a href="javascript:void(0)">Best Sellers</a></li>
                                                                <li><a href="javascript:void(0)">Release Dates</a></li>
                                                                <li><a href="javascript:void(0)">Sale</a></li>
                                                                <li><a href="javascript:void(0)">Deal Of The Day</a></li>
                                                                <li><a href="javascript:void(0)">Gender Neureal</a></li>
                                                                <li><a href="javascript:void(0)">Resolution Ready </a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <h4>Clothing</h4>
                                                            <ul>
                                                                <li><a href="javascript:void(0)">Tops & T-Shirts</a></li>
                                                                <li><a href="javascript:void(0)">Shorts</a></li>
                                                                <li><a href="javascript:void(0)">Polos</a></li>
                                                                <li><a href="javascript:void(0)">Hoodies & Sweatshirts</a></li>
                                                                <li><a href="javascript:void(0)">Jacket & Vests</a></li>
                                                                <li><a href="javascript:void(0)">Pants & Tights </a></li>
                                                                <li><a href="javascript:void(0)">Surt & Swimwear</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="img ">
                                                                <a href="javascript:void(0)"><img src="\img\banner-submenu.jpg" alt="_img banner submenu" class="img-fluid w-100"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9 tab-content p-0" id="tab-7">
                                                    <div class="row w-100 m-0">
                                                        <div class="col-4">
                                                            <h4>Shoes</h4>
                                                            <ul>
                                                                <li><a href="javascript:void(0)">SNKRS Launch Calendar</a></li>
                                                                <li><a href="javascript:void(0)">Life style</a></li>
                                                                <li><a href="javascript:void(0)">Running</a></li>
                                                                <li><a href="javascript:void(0)">Training & Gym</a></li>
                                                                <li><a href="javascript:void(0)">Basketball</a></li>
                                                                <li><a href="javascript:void(0)">Jordan</a></li>
                                                                <li><a href="javascript:void(0)">Football</a></li>
                                                                <li><a href="javascript:void(0)">Soccer</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <h4>Clothing</h4>
                                                            <ul>
                                                                <li><a href="javascript:void(0)">Tops & T-Shirts</a></li>
                                                                <li><a href="javascript:void(0)">Shorts</a></li>
                                                                <li><a href="javascript:void(0)">Polos</a></li>
                                                                <li><a href="javascript:void(0)">Hoodies & Sweatshirts</a></li>
                                                                <li><a href="javascript:void(0)">Jacket & Vests</a></li>
                                                                <li><a href="javascript:void(0)">Pants & Tights </a></li>
                                                                <li><a href="javascript:void(0)">Surt & Swimwear</a></li>
                                                                <li><a href="javascript:void(0)">Nike Pro & Compression</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="img image-effect">
                                                                <a href="javascript:void(0)"><img src="\img\page2_footer.jpg" alt="_img banner submenu" class="img-fluid w-100"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-9 tab-content p-0" id="tab-8">
                                                    <div class="row w-100 m-0">
                                                        <div class="col-4">
                                                            <h4>Shoes</h4>
                                                            <ul>
                                                                <li><a href="javascript:void(0)">SNKRS Launch Calendar</a></li>
                                                                <li><a href="javascript:void(0)">Life style</a></li>
                                                                <li><a href="javascript:void(0)">Running</a></li>
                                                                <li><a href="javascript:void(0)">Training & Gym</a></li>
                                                                <li><a href="javascript:void(0)">Basketball</a></li>
                                                                <li><a href="javascript:void(0)">Jordan</a></li>
                                                                <li><a href="javascript:void(0)">Football</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <h4>Clothing</h4>
                                                            <ul>
                                                                <li><a href="javascript:void(0)">Tops & T-Shirts</a></li>
                                                                <li><a href="javascript:void(0)">Shorts</a></li>
                                                                <li><a href="javascript:void(0)">Polos</a></li>
                                                                <li><a href="javascript:void(0)">Hoodies & Sweatshirts</a></li>
                                                                <li><a href="javascript:void(0)">Jacket & Vests</a></li>
                                                                <li><a href="javascript:void(0)">Pants & Tights </a></li>
                                                                <li><a href="javascript:void(0)">Surt & Swimwear</a></li>
                                                                <li><a href="javascript:void(0)">Nike Pro & Compression</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="img image-effect">
                                                                <a href="javascript:void(0)"><img src="\img\banner-submenu.jpg" alt="_img banner submenu" class="img-fluid w-100"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>-->
                                <li class="nav-item top-nav-items"><a href="/" class="nav-link top-nav-link">Inicio</a></li>
                                <li class="nav-item top-nav-items"><a href="/acercade" class="nav-link top-nav-link">Acerca de</a></li>

                                <li class="nav-item top-nav-items">
                                    <a href="javascript:void(0)" class="nav-link top-nav-link">Catálogo</a>
                                    <div class="submenu-header">
                                        <div class="my-container">
                                            <div class="row">
                                                <div class="col-3">

                                                </div>
                                                <div class="col-3">
                                                    <h4>Categorías</h4>
                                                    <ul>
                                                        <?php
                                               $query2 = "select * from categoria where eliminado!=1 ";

                                                $data2=DB::select($query2);

                                              ?>
                                                        @foreach($data2 as $item)
                                                        <li><a href="/tienda/1/{{$item->id_categoria}}">{{$item->nombre_categoria}}</a></li>
                                                        @endforeach

                                                    </ul>
                                                </div>
                                                <div class="col-3">

                                                </div>
                                                <div class="col-3">

                                                </div>
                                            </div>
                                            <!--<div class="img-banne image-effectr">
                                                <a href="javascript:void(0)">
                                                    <img src="\img\megamenu-banner2.jpg" alt="_img banner megamenu" class="img-fluid w-100">
                                                </a>
                                            </div>-->
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item top-nav-items"><a href="/contacto" class="nav-link top-nav-link">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-10 col-10 header-right">

                    <div class="js-click-megamenu header-menu">
                        <i class="lnr lnr-menu" style="color: #fff"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="menu-mobile ">
        <header class="header-mobile nav-down">
            <div class="header-menu">
                <div class="menu">
                    <i class="lnr lnr-menu js-click-megamenu"></i>
                </div>
                <div class="logo">
                    <a href="javascript:void(0)"><img src="\img\dq_logo.png" alt="_img-logo" width="80" height="12.8"></a>
                </div>

            </div>
        </header>
    </div>

    <main>



        @yield('contenido')

    </main>

    <footer>
        <section class="section-footer footer-home2">
            <div class="my-container">
                <div class="row no-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-6 padding-bot-30">
                        <h3>Contacto</h3>
                        <ul class="navbar-nav">
                            <li><i class="lnr lnr-home"></i>Blvd Las Reynas #939 Col. Las Reynas Salamanca Gto</li>
                            <li><i class="lnr lnr-phone"></i>Teléfono: 464-650-5690</li>
                            <li><i class="lnr lnr-envelope"></i>Correo: <a href="#">danielquijano@gmail.com</a></li>
                            <li><i class="lnr lnr-clock"></i>8:00 - 19:00, Lunes - Domingo</li>
                            <li>
                                <ul class="list-child">
                                    <li>
                                        <img src="\img\f-01.png" alt="_img-footer">
                                    </li>
                                    <li>
                                        <img src="\img\f-02.png" alt="_img-footer">
                                    </li>
                                    <li>
                                        <img src="\img\f-03.png" alt="_img-footer">
                                    </li>
                                    <li>
                                        <img src="\img\f-04.png" alt="_img-footer">
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 padding-bot-30">
                        <h3>Links rápidos</h3>
                        <ul>
                            <li><a href="/">Inicio</a></li>
                            <li><a href="/acercade">Acerca de</a></li>
                            <li><a href="/contacto">Contacto</a></li>

                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 padding-bot-30">
                        <h3>Redes sociales</h3>
                        <ul>
                            <li><a href="#"><i class="ti-facebook"></i>Facebook</a></li>
                            <li><a href="#"><i class="ti-twitter-alt"></i>Twitter</a></li>
                            <li><a href="#"><i class="ti-pinterest"></i>Pinterest</a></li>
                            <li><a href="#"><i class="ti-youtube"></i>Youtube</a></li>
                            <li><a href="#"><i class="ti-instagram"></i>Instagram</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 image-effect-home2 padding-bot-30">
                        <a href="#">
                            <span class="overlay"></span>
                            <img src="\img\page2_footer.jpg" alt="_img-banner footer" class="img-fluid w-100">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-copyright">
            <div class="my-container copyright2019">
                <div>DQ <i class="fa fa-copyright"></i> <?php $hoy = getdate();   
                            echo $hoy['year'];
                    ?> Desarrollada por <a href="https://jdevs.com.mx/">JDev-S</a>.</div>

            </div>
        </section>

    </footer>



    <div class="back-to-top">
        <span>
            <a href="javascript:void(0)">
                <i class="lnr lnr-chevron-up-circle"></i>
            </a>
        </span>
    </div>


    <script src="\js\jquery-1.12.4.min.js"></script>
    <script src="\js\bootstrap.bundle.min.js"></script>

    <script src="\vendors\slick\slick.min.js"></script>
    <script src="\vendors\countdown\jquery.countdown.js"></script>
    <script src="\vendors\barrating\jquery.barrating.min.js"></script>

    <script src="\js\store.js"></script>
</body>

</html>
