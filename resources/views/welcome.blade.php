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
                    <a href="/tienda" class="slide-dropdown">Catálogo <span class="lnr lnr-chevron-right down"></span></a>
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
                    <a href="/acercade" class="nav-link top-nav-link">Acerca de</a>

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


                                <li class="nav-item top-nav-items"><a href="/" class="nav-link top-nav-link">Inicio</a></li>

                                <li class="nav-item top-nav-items">
                                    <a href="/tienda/" class="nav-link top-nav-link">Catálogo</a>
                                    <div class="submenu-header">
                                        <div class="my-container">
                                            <div class="row">
                                                <?php
                                               $query2 = "select * from categoria where eliminado!=1 ";
                                                $i=0;
                                                $data2=DB::select($query2);
                                                echo'<div class="col-2">
                                                      <ul>';
                                                foreach($data2 as $item)
                                                {
                                                    if($i<4)
                                                    {
                                                        echo'<li><a href="/tienda/1/'.$item->id_categoria.'">'.$item->nombre_categoria.'</a></li>';
                                                        $i++;
                                                    }
                                                    else
                                                    {
                                                        echo'  </ul>
                                                        </div>';
                                                        $i=0;
                                                        echo'<div class="col-2">
                                                        <ul>';
                                                        echo'<li><a href="/tienda/1/'.$item->id_categoria.'">'.$item->nombre_categoria.'</a></li>';
                                                        $i++; 
                                                    }
                                                }
                                                 echo'</ul>
                                                 </div>';
                                              ?>
                                            </div>
                                            <div class="img-banne image-effectr">
                                                <a href="javascript:void(0)">
                                                    <img src="\img\megamenu-banner2.jpg" alt="_img banner megamenu" class="img-fluid w-100">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="nav-item top-nav-items"><a href="/acercade" class="nav-link top-nav-link">Acerca de</a></li>

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
