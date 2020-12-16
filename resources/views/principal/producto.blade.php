@extends('welcome')
@section('contenido')
<section class="section-slide img-fluid" style="background-image: url('/img/{{$productos[0]->fotografia_miniatura}}');">
    <div class="title text-center">
        <h3 class="heading-3 font-weight-bold">{{$productos[0]->nombre_alimento}}</h3>

    </div>
</section>


<section class="section-toolbar">
    <div class="product-toolbar">
        <div class="my-container">
            <a href="/catalogo">Cátalogo</a> /
            <a href="/tienda/1/{{$productos[0]->id_categoria}}">{{$productos[0]->nombre_categoria}}</a> /
            <a href="javascript:void(0)">{{$productos[0]->nombre_alimento}}</a>

        </div>
    </div>
</section>

<section class="section-product-detail-v2 ">
    <div class="my-container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="product-detail-v2">
                    <div class="col-prod-2">
                        <div class="js-slide-product3 slick-scoll">
                            @foreach($fotos_muestra as $foto)
                            <div class="product-image">
                                <img src="/img/{{$foto->imagen_muestra}}" alt="Product" class="img-fluid w-100">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-prod-10">
                        <div class="js-product-thumbnail3 slick-scoll1">
                            @foreach($fotos_muestra as $foto)
                            <div class="product-image">
                                <img src="/img/{{$foto->imagen_muestra}}" alt="Product" class="img-fluid w-100">
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-75">
                        <div class="info-product">
                            <div class="rating d-flex  align-items-center">
                                <div>{{$productos[0]->nombre_categoria}}</div>
                                <div>
                                    <span><i class="fa fa-star" style="color: rgba(34, 34, 34, 1.)"></i><i class="fa fa-star" style="color: rgba(34, 34, 34, 1.)"></i><i class="fa fa-star" style="color: rgba(34, 34, 34, 1.)"></i><i class="fa fa-star" style="color: rgba(34, 34, 34, 1.)"></i><i class="fa fa-star" style="color: rgba(34, 34, 34, 1.)"></i>
                                    </span>

                                </div>
                            </div>
                            <h4 class="name-product font-weight-bold">{{$productos[0]->nombre_alimento}}</h4>
                            <h4 class="price-product">{{$productos[0]->precio}}</h4>
                            <p>{{$productos[0]->descripcion}}.</p>
                        </div>
                        <div class="customer-option">
                            <div class="select-color">
                                <h4 class="heading-4 font-weighth-bold select-option-p2">Colores</h4>
                                @foreach($fotos_color as $fotoc)
                                <a href="javascript:void(0)"><img src="/img/{{$fotoc->imagen_color}}" alt="_img color" class="img-fluid w-100"><span class="overlay"></span></a>
                                @endforeach
                            </div>


                        </div>
                        <div class="link-page">

                            <div class="share">
                                <label class="font-weight-bold mb-0">Compartir:</label>
                                <a href="javascript:void(0)"><i class="ti ti-facebook"></i></a>
                                <a href="javascript:void(0)"><i class="ti-twitter-alt"></i></a>
                                <a href="javascript:void(0)"><i class="ti-pinterest"></i></a>
                                <a href="javascript:void(0)"><i class="ti-youtube"></i></a>
                                <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-25"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-description">
    <div class="my-container">
        <ul class="tabs  d-flex justify-content-between col-xl-6 col-md-8 col-md-8">
            <li class="tabs-link current font-weight-bold" data-tab="tab-2">Información adicional</li>

        </ul>

        <div id="tab-2" class="tab-content current">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Tamaño</td>
                        <td>{{$productos[0]->talla}}</td>
                    </tr>
                    <tr>
                        <td>Color</td>
                        <td>{{$productos[0]->color}}</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

<section class="section-product-v1">
    <div class="my-container">
        <h3 class="heading-3 text-center font-weight-bold text-capitalize">Productos relacionados</h3>
        <div class="row">
            @foreach($aSimilares as $viejo)
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


@stop
