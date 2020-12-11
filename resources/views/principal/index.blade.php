@extends('welcome')
@section('contenido')

<section class="section-slide-v1 section-slide-v2">
    <div class="js-slick-slide-v2 slick-header-v2">
        <div class="slider-child">
            <div class="img-slider">
                <img src="\img\page2_01.jpg" alt="_img-slider" class="img-fluid w-100">
            </div>
            <div class=" title">
                <div class="my-container">
                    <h1 class="mb-0">Título.</h1>
                    <p class="content font-weight-bold">Descripción</p>
                    <a href="/catalogo" class="btn-shop-now">Observar catálogo</a>
                </div>
            </div>
        </div>
        <div class="slider-child">
            <div class="img-slider">
                <img src="\img\page2_01-2.jpg" alt="_img-slider" class="img-fluid w-100">
            </div>
            <div class=" title">
                <div class="my-container">
                    <h1 class="mb-0">Título.</h1>
                    <p class="content font-weight-bold">Descripción</p>
                    <a href="/catalogo" class="btn-shop-now">Observar catálogo</a>
                </div>
            </div>
        </div>
        <div class="slider-child">
            <div class="img-slider">
                <img src="\img\page2_01-3.jpg" alt="_img-slider" class="img-fluid w-100">
            </div>
            <div class=" title">
                <div class="my-container">

                    <h1 class="mb-0">Título.</h1>
                    <p class="content font-weight-bold">Descripción</p>
                    <a href="/catalogo" class="btn-shop-now">Observar catálogo</a>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section-product-v1">
    <div class="my-container">
        <h3 class="heading-3 font-weight-bold text-center text-capitalize">Nuevos productos</h3>
        <div class="row">
            @foreach($aNuevos as $nuevo)
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="product product-home2">
                    <div class="js-product-thumbnail img-show">
                        @foreach($nuevo->imagen_muestra as $nu)
                        <div class="product-image">
                            <a href="/info_producto?producto={{$nuevo->id_alimento}}">
                                <img src="/img/{{$nu}}" alt="Product" class="img-fluid w-100">
                            </a>

                        </div>
                        @endforeach

                    </div>
                    <div class="title">

                        <div class="slick-destop">
                            <div class="js-slide-product slick-scoll">
                                @foreach($nuevo->imagen_muestra as $nu)
                                <div class="product-image">
                                    <img src="/img/{{$nu}}" alt="Product" class="img-fluid w-100">
                                </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="information">
                            <div class="type-shoes">
                                <div>{{$nuevo->nombre_categoria}}</div>
                                <div>
                                    <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                    <span>5</span>
                                </div>
                            </div>
                            <a href="/info_producto?producto={{$nuevo->id_alimento}}">
                                <h6>{{$nuevo->nombre_alimento}}</h6>
                            </a>
                            <div class="dollar">${{$nuevo->precio}} MXN</div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


<section class="section-banner-v1-page2">
    <div class="my-container">
        <div class="row no-gutters">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="banner01 relative image-effect">
                    <a href="grid-slidebar-left.html">
                        <img src="\img\page2_banner01.jpg" alt="_img banner" class="img-fluid w-100 ">
                    </a>
                    <div class="title absolute w-100 text-center">
                        <h3 class="m-0 heading-3 font-weight-bold">Título</h3>
                        <p class="para-fs30 m-0">Descripción</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="banner02 relative image-effect">
                            <a href="grid-slidebar-left.html">
                                <img src="\img\page2_banner02.jpg" alt="_img banner Homepage 2" class="img-fluid w-100">
                            </a>
                            <div class="title absolute">
                                <p class="para-fs30 m-0">
                                    Titulo
                                </p>
                                <h3 class="heading-3 text-capitalize font-weight-bold">Descripción</h3>

                                <a href="/catalogo" class="btn-shop-now">Ir al catálogo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-50" style="background: #f4f4f4; overflow: hidden;">
                        <div class="banner03 text-center relative ">
                            <div class="title absolute">
                                <h6 class="para-fs30 font-weight-bold">Daniel Quijano</h6>
                                <p class="para-fs18">Bienvenidos a la colección de Daniel Quijano.</p>
                                <a href="/catalogo" class="btn-shop-now">Ir al catálogo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-50">
                        <div class="banner04 relative text-center image-effect">
                            <a href="grid-slidebar-left.html">
                                <img src="\img\page2_banner04.jpg" alt="_img banner Homepage v2" class="img-fluid w-100">
                            </a>
                            <div class="title absolute w-100">
                                <p class="para-fs30 m-0 text-capitalize">Título</p>
                                <h3 class="heading-3 font-weight-bold text-capitalize">Descripción</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-product-v1">
    <div class="my-container">
        <h3 class="heading-3 font-weight-bold text-center text-capitalize">Productos Anteriores</h3>
        <div class="row">
            @foreach($aViejos as $viejo)
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="product product-home2">
                    <div class="js-product-thumbnail img-show">
                        @foreach($viejo->imagen_muestra as $vi)
                        <div class="product-image">
                            <a href="/info_producto?producto={{$viejo->id_alimento}}">
                                <img src="/img/{{$vi}}" alt="Product" class="img-fluid w-100">
                            </a>

                        </div>
                        @endforeach

                    </div>
                    <div class="title">

                        <div class="slick-destop">
                            <div class="js-slide-product slick-scoll">
                                @foreach($viejo->imagen_muestra as $vi)
                                <div class="product-image">
                                    <img src="/img/{{$vi}}" alt="Product" class="img-fluid w-100">
                                </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="information">
                            <div class="type-shoes">
                                <div>{{$viejo->nombre_categoria}}</div>
                                <div>
                                    <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                                    <span>5</span>
                                </div>
                            </div>
                            <a href="/info_producto?producto={{$viejo->id_alimento}}">
                                <h6>{{$viejo->nombre_alimento}}</h6>
                            </a>
                            <div class="dollar">${{$viejo->precio}} MXN</div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="section-support-v1">
    <div class="my-container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="box">
                    <div class="icon"><i class="ti-truck"></i></div>
                    <div class="content">
                        <p class="m-0">Envíos</p>
                        <span>Lo llevamos hasta tu casa</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="box">
                    <div class="icon"><i class="ti-gift"></i></div>
                    <div class="content">
                        <p class="m-0">Pequeños regalos</p>
                        <span>Pregunta por nuestros regalos</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ">
                <div class="box">
                    <div class="icon"><i class="ti-headphone-alt"></i></div>
                    <div class="content">
                        <p class="m-0">Dudas</p>
                        <span>Llámanos a 464123456789</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="box">
                    <div class="icon"><i class="icon-ecommerce-sale"></i></div>
                    <div class="content">
                        <p class="m-0">Descuentos</p>
                        <span>Pregunta por nuestros descuentos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-instagram-v1">
    <div class="my-container">
        <div class="row no-gutters">
            <div class="col-xl-3 col-lg-3 col-md-3">
                <div class="title">
                    <h3 class="heading-3 font-weight-bold text-capitalize">Síguenos en instagram</h3>
                    <a href="grid-slidebar-left.html">@engocreativetheme</a>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9" style="margin-left: -2px;">
                <div class="row no-gutters">
                    <div class="col-xl-3 col-lg-3 col-md-3 relative img-insta">
                        <div class="img">
                            <img src="\img\page2_int1.jpg" alt="_img page2 instagram" class="img-fluid w-100 img-hover">
                        </div>
                        <div class="overlay absolute">
                        </div>
                        <a href="javascript:void(0)" class="icon-insta"><i class="ti-instagram"></i></a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 relative img-insta">
                        <div class="img">
                            <img src="\img\page2_int2.jpg" alt="_img page2 instagram" class="img-fluid w-100 img-hover">
                        </div>
                        <div class="overlay absolute">
                        </div>
                        <a href="javascript:void(0)" class="icon-insta"><i class="ti-instagram"></i></a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 relative img-insta">
                        <div class="img">
                            <img src="\img\page2_int3.jpg" alt="_img page2 instagram" class="img-fluid w-100 img-hover">
                        </div>
                        <div class="overlay absolute">
                        </div>
                        <a href="javascript:void(0)" class="icon-insta"><i class="ti-instagram"></i></a>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 relative img-insta">
                        <div class="img">
                            <img src="\img\page2_int4.jpg" alt="_img page2 instagram" class="img-fluid w-100 img-hover">
                        </div>
                        <div class="overlay absolute">
                        </div>
                        <a href="javascript:void(0)" class="icon-insta"><i class="ti-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop
