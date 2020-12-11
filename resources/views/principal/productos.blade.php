@extends('welcome')
@section('contenido')
<section class="section-slide img-fluid">
    <div class="title text-center">
        <h3 class="heading-3 font-weight-bold">Catálogo</h3>

    </div>
</section>
<section class="section-category-spage">
    <div class="my-container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-sm-8 col-12 d-flex  align-items-center category">
                <div class="w-50 d-flex justify-content-between align-items-center" style="padding-right:15px;">
                    <a href="/tienda"><h4 class="fs-30">Ver todos</h4></a>
                    <span class="lnr lnr-chevron-right"></span>
                </div>
                <?php echo '<div class="text">Mostrar '.$pagina.'-'.$pagina*4 .' de '.$numero_platillos[0]->numero_platillos.' resultados</div>';?>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-4  d-flex align-items-center justify-content-end">
                <div class="select-option-spage  d-flex align-items-center ">
                    <div class="filter-show d-flex">
                        <!--<div class="select-filter">
                            <select class="selected">
                                <option value="Filters">Filters </option>
                                <option>Featured</option>
                                <option>Best Selling</option>
                                <option>Alphabetically, A-Z</option>
                                <option>Alphabetically, Z-A</option>
                                <option>Price, low to high</option>
                                <option>Price, high to low</option>
                                <option>Date, new to old</option>
                                <option>Date, old to new</option>
                            </select>
                        </div>-->
                        <!--<div class="select-show">
                            <select>
                                <option value="Show 04">Show 04</option>
                                <option>12</option>
                                <option>24</option>
                                <option>48</option>
                            </select>
                        </div>-->
                    </div>
                    <!--<div class="list-gird">
                        <a href="javascript:void(0)" class="js-list"><i class="ti-layout-grid4-alt"></i></a>
                        <!--<a href="javascript:void(0)" class="js-grid"><i class="ti-menu-alt"></i></a>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</section>
<div class="js-sort-layout">
    <div class="section-product-v1">
        <div class="my-container">
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
    </div>
</div>

<div class="section-next-page">
    <div class="my-container">
        <div class="content d-flex  justify-content-center">
            <!--<div class="prev-arrow arrow">
                <a href="javascript:void(0)"><i class="lnr lnr-arrow-left"></i></a>
            </div>
            
            <div class="next-arrow arrow">
                <a href="javascript:void(0)"><i class="lnr lnr-arrow-right"></i></a>
            </div>-->

            <?php
                       $paginacion= $numero_platillos[0]->numero_platillos/4;
                       $paginacion=ceil($paginacion); 
                    if(empty($buscar))
                    {
                            if(empty($categoria))
                        {

                             if($pagina>1)
                           {
                               if($pagina>$paginacion)
                               {
                                   //echo'<li><a href="/'.$paginacion.'">«</a></li>';
                                   //echo '<a class="next page-numbers" href="/index/'.$paginacion.'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                                   
                                    //echo'<li>
                                        //<a href="/tienda/'.$paginacion.'/" class="page-numbers prev">
                                         //   <span class="lnr lnr-arrow-left"></span>
                                        //</a>
                                    //</li>';
                                   echo'<div class="prev-arrow arrow">
                                    <a href="/tienda/'.$paginacion.'/"><i class="lnr lnr-arrow-left"></i></a>
                                    </div>';
                               }
                        else
                               {
                                   //echo'<li><a href="/'.($pagina-1).'">«</a></li>';
                                  // echo '<a class="next page-numbers" href="/index/'.($pagina-1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                            
                                       /*echo'<li>
                                        <a href="/tienda/'.($pagina-1).'/" class="page-numbers prev">
                                            <span class="lnr lnr-arrow-left"></span>
                                        </a>
                                    </li>';*/
                                    echo'<div class="prev-arrow arrow">
                                    <a href="/tienda/'.($pagina-1).'/"><i class="lnr lnr-arrow-left"></i></a>
                                    </div>';
                               }

                           }                

                           for($i=1;$i<=ceil($numero_platillos[0]->numero_platillos/4);$i++)
                           {
                               if($i==$pagina)
                               {
                                   //echo'<li class="active"><a  href="/'.$i.'">'.$i.'</a></li>';
                                  // echo '<span class="page-numbers current"><a  href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a></span>';
                                //echo'   <li>
                                  //     <a href="/tienda/'.$i.'/"> <span class="page-numbers current">'.$i.'</span> </a>
                                  //</li>';
                                   
                                   echo'<div class="prev-arrow arrow">
                                    <a href="/tienda/'.$i.'/">'.$i.'</a>
                                    </div>';
                               }
                               else
                               {
                                   //echo'<li><a  href="/'.$i.'">'.$i.'</a></li>';
                                    //echo '<a class="page-numbers" href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a>';
                                   //echo' <li>
                                     //   <a href="/tienda/'.$i.'/" class="page-numbers inactive">'
                                       //     .$i.'
                                        //</a>
                                    //</li>';
                                   echo'<div class="prev-arrow arrow">
                                    <a href="/tienda/'.$i.'/">'.$i.'</a>
                                    </div>';
                               }

                           }

                           if($pagina<$paginacion)
                           {
                               //echo'<li><a href="/'.($pagina+1).'">»</a></li>';
                                //echo '<a class="next page-numbers" href="/index/'.($pagina+1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-right"></i></a>';
                               
                                    //echo '<li>
										//<a href="/tienda/'.($pagina+1).'/" class="page-//numbers next">
											//<span class="lnr lnr-arrow-right"></span>
										//</a>
									//</li>';
                                echo'<div class="next-arrow arrow">
                                    <a href="/tienda/'.($pagina+1).'/"><i class="lnr lnr-arrow-right"></i></a>
                                    </div>';
                                      
                           }
                    }
                    else
                        {

                            if($pagina>1)
                           {
                               if($pagina>$paginacion)
                               {
                                   //echo'<li><a href="/'.$paginacion.'">«</a></li>';
                                   //echo '<a class="next page-numbers" href="/index/'.$paginacion.'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                                   
                                    //echo'<li>
                                      //  <a href="/tienda/'.$paginacion.'/'.$categoria.'" //class="page-numbers prev">
                                        //    <span class="lnr lnr-arrow-left"></span>
                                        //</a>
                                    //</li>';
                                   
                                  echo' <div class="prev-arrow arrow">
                                    <a href="/tienda/'.$paginacion.'/'.$categoria.'"><i class="lnr lnr-arrow-left"></i></a>
                                    </div>';
                               }
                        else
                               {
                                   //echo'<li><a href="/'.($pagina-1).'">«</a></li>';
                                  // echo '<a class="next page-numbers" href="/index/'.($pagina-1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-left"></i></a>';
                            
                                       //echo'<li>
                                        //<a href="/tienda/'.($pagina-1).'/'.$categoria.'" //class="page-numbers prev">
                                          //  <span class="lnr lnr-arrow-left"></span>
                                        //</a>
                                    //</li>';
                                    echo'<div class="prev-arrow arrow">
                                    <a href="/tienda/'.($pagina-1).'/'.$categoria.'"><i class="lnr lnr-arrow-left"></i></a>
                                    </div>';
                                    
                               }

                           }                

                           for($i=1;$i<=ceil($numero_platillos[0]->numero_platillos/4);$i++)
                           {
                               if($i==$pagina)
                               {
                                   //echo'<li class="active"><a  href="/'.$i.'">'.$i.'</a></li>';
                                  // echo '<span class="page-numbers current"><a  href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a></span>';
                                /*echo'   <li>
                                       <a href="/tienda/'.$i.'/'.$categoria.'"> <span class="page-numbers current">'.$i.'</span> </a>
                                  </li>';*/
                                   echo'<div class="prev-arrow arrow">
                                    <a href="/tienda/'.$i.'/'.$categoria.'">'.$i.'</a>
                                    </div>';

                               }
                               else
                               {
                                   //echo'<li><a  href="/'.$i.'">'.$i.'</a></li>';
                                    //echo '<a class="page-numbers" href="/index/'.$i.'/'.$categoria.'/'.$buscar.'">'.$i.'</a>';
                                   /*echo' <li>
                                        <a href="/tienda/'.$i.'/'.$categoria.'" class="page-numbers inactive">'
                                            .$i.'
                                        </a>
                                    </li>';*/
                                   echo'<div class="prev-arrow arrow">
                                    <a href="/tienda/'.$i.'/'.$categoria.'">'.$i.'</a>
                                    </div>';
                                   
                               }

                           }

                           if($pagina<$paginacion)
                           {
                               //echo'<li><a href="/'.($pagina+1).'">»</a></li>';
                                //echo '<a class="next page-numbers" href="/index/'.($pagina+1).'/'.$categoria.'/'.$buscar.'"><i class="ti ti-arrow-right"></i></a>';
                               
                                    /*echo '<li>
										<a href="/tienda/'.($pagina+1).'/'.$categoria.'" class="page-numbers next">
											<span class="lnr lnr-arrow-right"></span>
										</a>
									</li>';*/
                               echo'<div class="next-arrow arrow">
                <a href="/tienda/'.($pagina+1).'/'.$categoria.'"><i class="lnr lnr-arrow-right"></i></a>
            </div>';
                                      
                           }
                        }
                        
                    }
                ?>
        </div>
    </div>
</div>
@stop
