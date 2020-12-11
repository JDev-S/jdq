@extends('welcome')
@section('contenido')

<section class="slide-about-us img-fluid ">
    <div class="title text-center">
        <h3 class="heading-3 font-weight-bold  text-white">
            Contáctanos
        </h3>

    </div>
</section>

<section class="section-contact-us">
    <div class="my-container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 detail">
                <h3 class="heading-3  mb-0">Detalles de contacto</h3>
                <p class="col-10 para-fs18 font-2 pl-0" style="padding-right: 20px">
                    pequeña descripción
                </p>
                <ul>
                    <li><i class="lnr lnr-home"></i><span>Dirección: </span>Blvd Las Reynas #939 Col. Las Reynas Salamanca Gto.</li>
                    <li><i class="lnr lnr-phone"></i><span>Teléfono: </span>464-650-5690</li>
                    <li><i class="lnr lnr-envelope"></i><span>Email: </span> <a href="#">danielquijano@gmail.com</a></li>
                    <li><i class="lnr lnr-clock"></i><span>Horario: </span> 8:00 - 19:00, Lunes - Domingo</li>
                </ul>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 contact">
                <h3 class="heading-3">Llenar formulario</h3>
                <form method="POST" action={{route('contact')}}>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 margin-bot-30">
                            <input type="text" class="form-control" placeholder="Nombre*" name="nombre" required="" >
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 margin-bot-30">
                            <input type="email" class="form-control" placeholder="Email*" name="email" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 margin-bot-30">
                            <input type="numeric" class="form-control" placeholder="Teléfono" name="telefono" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje*" class="w-100" required=""></textarea>
                        </div>
                    </div>
                    <button type="submit" name="submit">Enviar mensaje</button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="section-map">
    <div class="my-container">
        <iframe frameborder="0" style="border:0" width="100%" height="800px" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCk772XLy40HkG_bcrWIfqYXaj9sTyZRdY&q=place_id:ChIJ0U8uT4GFLIQRvv6_lRcoE44" allowfullscreen=""></iframe>
    </div>
</section>

@stop
