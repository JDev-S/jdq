@extends('welcome')
@section('contenido')
<section class="section-slide img-fluid" style="background-image: url('/img/about-us-1.jpg');">
    <div class="title text-center">
        <h3 class="heading-3 font-weight-bold">Acerca de</h3>

    </div>
</section>

<section class="section-history">
    <div class="my-container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="year para-fs18">Historia desde 2020</div>
                <h3 class="heading-3 font-weight-bold">Bienvenidos a Daniel Quijano.</h3>
                <div class="font-2 para-fs18 detail">Breve historia.</div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                <div class="quote">
                    <q class="">Breve historia.</q>
                    <p class="	">Breve historia.</p>
                    <img src="\img\font-matsury.png" alt="_img font matsury" class="">
                    <div class=""><span>Diseñador</span> Daniel Quijano</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-about-us video-home4">
    <div class="my-container">
        <div class="js-slick-video">
            <div class="video-home4">
                <!--<a data-fancybox="" href="..\..\..\watch.html?v=t6VpHyKXHBM">
                    <img src="\img\about-us-video1.jpg" alt="_img video Homepage4" class="img-fluid w-100">
                <span><img src="img\icon-video.png" alt="_img icon video"></span>
                </a>-->
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/aTmrYzR8-zk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
           
        </div>
    </div>
</section>

<!--<section class="section-our-team">
    <div class="my-container">
        <h3 class="heading-3 font-weight-bold text-center">Equipo de trabajo</h3>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 member">
                <div class="img">
                    <a href="javascript:void(0)">
                        <img src="\img\about-us-2.jpg" alt="_img about us" class="img-fluid w-100">
                    </a>
                    <div class="overlay"></div>
                </div>
                <div class="team-member">Robert Smith</div>
                <div>Direction</div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 member">
                <div class="img">
                    <a href="javascript:void(0)">
                        <img src="\img\about-us-3.jpg" alt="_img about us" class="img-fluid w-100">
                    </a>
                    <div class="overlay"></div>
                </div>
                <div class="team-member">Rudy Reeves</div>
                <div>Stylist</div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 member">
                <div class="img">
                    <a href="javascript:void(0)"><img src="\img\about-us-4.jpg" alt="_img about us" class="img-fluid w-100">
                    </a>
                    <div class="overlay"></div>
                </div>
                <div class="team-member">Sandra Hale</div>
                <div>Design</div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 member">
                <div class="img">
                    <a href="javascript:void(0)"><img src="\img\about-us-5.jpg" alt="_img about us" class="img-fluid w-100">
                    </a>
                    <div class="overlay"></div>
                </div>
                <div class="team-member">Brandon Vasquez</div>
                <div>Direction</div>
            </div>

        </div>
    </div>

</section>-->
@stop