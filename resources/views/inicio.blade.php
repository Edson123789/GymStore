@extends('layouts.users')
@section('user-content')
<main class="main">

    <div class="home-slider owl-carousel owl-carousel-lazy owl-theme owl-theme-light">
        <div class="home-slide">
            <div class="owl-lazy slide-bg" data-src="assets/images/slider/slide-1.jpg"></div>
            <div class="home-slide-content text-white">
                <h3>Obten hasta <span>20%</span> en</h3>
                <h1>Todo Pesas y mancuernas</h1>
                <p>Solo durante dos días.</p>
                <a href="{{route('productos')}}" class="btn btn-dark">Ir a comprar</a>
            </div><!-- End .home-slide-content -->
        </div><!-- End .home-slide -->
        <div class="home-slide">
            <div class="owl-lazy slide-bg" data-src="assets/images/slider/slide-2.jpg"></div>
            <div class="home-slide-content text-white">
                <h3>Accesorios Fitness <span>Exclusivos</span></h3>
                <h1>Nuevos diseños</h1>
                <p>Variedad de productos.</p>
                <a href="{{route('productos')}}" class="btn btn-dark">Ir a comprar</a>
            </div><!-- End .home-slide-content -->
        </div><!-- End .home-slide -->
        <div class="home-slide">
            <div class="owl-lazy slide-bg" data-src="assets/images/slider/slide-3.jpg"></div>
            <div class="home-slide-content text-white">
                <h3>Sets <span>Completos</span> de GYM en casa</h3>
                <h1>Totalmente equipados</h1>
                <p>y en la comodidad de tu hogar.</p>
                <a href="{{route('productos')}}" class="btn">Ir a comprar</a>
            </div><!-- End .home-slide-content -->
        </div><!-- End .home-slide -->
    </div>

    <div class="row mx-auto my-auto text-center" style="background-color: #000; background-size: contain;">
        <div id="myCarousell" class="carousel slide w-100 mx-4" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item py-5 active">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/pesas.jpg); ">
                                <div class="card-body">
                                    <h2 class="card-title-product">Pesas y Mancuernas</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/barras.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Barras</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/dominadas.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Barras Dominadas</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/discos.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Discos</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/trotadoras.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Trotadoras</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/spinning.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Bicicletas Spinning</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5 ">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/rusas.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Pesas Rusas</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/soga.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Sogas profesionales</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/banco.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Banca de Pesas</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item py-5 ">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/matt.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Colchonetas</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/bandas.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Bandas resistencia</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card-product-img" style="background-image: url(assets/images/products/otros.jpg);">
                                <div class="card-body">
                                    <h2 class="card-title-product">Otros Accesarios</h2>
                                    <p class="card-text-product">Some make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-product btn-primary" style="text-decoration: none;">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-2">
            <a class="carousel-control-prev text-end" href="#myCarousell" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" style="font-size: xlarge;" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousell" role="button" data-slide="next">
                <span class="carousel-control-next-icon" style="font-size: xlarge;" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="mb-5"></div>
    <div class="container text-center my-3">
        <h2 class="carousel-title">Productos nuevos</h2>
        <div class="home-featured-products owl-carousel owl-theme owl-dots-top">
            @foreach ($newest as $item)
            <div class="product-default">
                <figure>
                    <a href="{{route('producto',$item->slug)}}">
                        <img src="{{asset('poster/'. $item->poster)}}">
                    </a>
                </figure>
                <div class="product-details">
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <h2 class="product-title" style="text-align: center;">
                        <a href="{{route('producto',$item->slug)}}" style="white-space: normal">{{$item->titulo}}</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">
                            @if ($config->tipo_moneda == 'Soles')
                            S/.
                            @elseif($config->tipo_moneda == 'Dolares')
                            $
                            @endif

                            {{$item->precio_ahora}}</span>
                        <del>{{$item->precio_antes}}</del>
                    </div><!-- End .price-box -->
                    <div class="product-action">
                        <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>

                        <form action="{{route('agregar.carrito')}}" method="POST" style="margin:0 !important">
                            @csrf
                            <input type="hidden" name="cantidad" value="1">
                            <input type="hidden" value="{{$item->id}}" name="idproducto">
                            <button class="btn-icon btn-add-cart" type="submit"><i class="icon-bag"></i>AL
                                CARRITO</button>
                        </form>
                    </div>
                </div><!-- End .product-details -->
            </div>
            @endforeach


        </div>
        <div class="mb-5"></div>
    </div>

    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading mt-2">
                        <h2>Choose <em>Program</em></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Basic Fitness</h4>
                                <p>Please do not re-distribute this template ZIP file on any template collection website. This is not allowed.</p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>New Gym Training</h4>
                                <p>If you wish to support TemplateMo website via PayPal, please feel free to contact us. We appreciate it a lot.</p>

                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Advanced Muscle Course</h4>
                                <p>You may want to browse through <a rel="nofollow" href="https://templatemo.com/tag/digital-marketing" target="_parent">Digital Marketing</a> or <a href="https://templatemo.com/tag/corporate">Corporate</a> HTML CSS templates on our website.</p>

                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Yoga Training</h4>
                                <p>This template is built on Bootstrap v4.3.1 framework. It is easy to adapt the columns and sections.</p>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="mb-5"></div>

    <div class="container text-center my-3">
        <div class="container mt-4">
            <div class="product-column">
                <h3 class="title">LOS MÁS VENDIDOS</h3>
                <div class="home-featured-products owl-carousel owl-theme owl-dots-top">

                    @foreach ($mejor as $item)
                    <div class="product-default">
                        <figure>
                            <a href="{{route('producto',$item->slug)}}">
                                <img src="{{asset('poster/'. $item->poster)}}">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title" style="text-align: center;">
                                <a href="{{route('producto',$item->slug)}}" style="white-space: normal">{{$item->titulo}}</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div>
                            <div class="price-box">
                                <span class="product-price">
                                    @if ($config->tipo_moneda == 'Soles')
                                    S/.
                                    @elseif($config->tipo_moneda == 'Dolares')
                                    $
                                    @endif

                                    {{$item->precio_ahora}}</span>
                                <del>{{$item->precio_antes}}</del>
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>

                                <form action="{{route('agregar.carrito')}}" method="POST" style="margin:0 !important">
                                    @csrf
                                    <input type="hidden" name="cantidad" value="1">
                                    <input type="hidden" value="{{$item->id}}" name="idproducto">
                                    <button class="btn-icon btn-add-cart" type="submit"><i class="icon-bag"></i>AL
                                        CARRITO</button>
                                </form>
                            </div>
                        </div><!-- End .product-details -->
                    </div>
                    @endforeach

                    @foreach ($hot as $item)
                    <div class="product-default">
                        <figure>
                            <a href="{{route('producto',$item->slug)}}">
                                <img src="{{asset('poster/'. $item->poster)}}">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title" style="text-align: center;">
                                <a href="{{route('producto',$item->slug)}}" style="white-space: normal">{{$item->titulo}}</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div>
                            <div class="price-box">
                                <span class="product-price">
                                    @if ($config->tipo_moneda == 'Soles')
                                    S/.
                                    @elseif($config->tipo_moneda == 'Dolares')
                                    $
                                    @endif

                                    {{$item->precio_ahora}}</span>
                                <del>{{$item->precio_antes}}</del>
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>

                                <form action="{{route('agregar.carrito')}}" method="POST" style="margin:0 !important">
                                    @csrf
                                    <input type="hidden" name="cantidad" value="1">
                                    <input type="hidden" value="{{$item->id}}" name="idproducto">
                                    <button class="btn-icon btn-add-cart" type="submit"><i class="icon-bag"></i>AL
                                        CARRITO</button>
                                </form>
                            </div>
                        </div><!-- End .product-details -->
                    </div>
                    @endforeach

                </div>
                <div class="mb-3"></div>
                <h3 class="title">RECOMENDADOS PARA TI</h3>
                <div class="home-featured-products owl-carousel owl-theme owl-dots-top">
                    @foreach ($reco as $item)
                    <div class="product-default">
                        <figure>
                            <a href="{{route('producto',$item->slug)}}">
                                <img src="{{asset('poster/'. $item->poster)}}">
                            </a>
                        </figure>
                        <div class="product-details">
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <h2 class="product-title" style="text-align: center;">
                                <a href="{{route('producto',$item->slug)}}" style="white-space: normal">{{$item->titulo}}</a>
                            </h2>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                            </div>
                            <div class="price-box">
                                <span class="product-price">
                                    @if ($config->tipo_moneda == 'Soles')
                                    S/.
                                    @elseif($config->tipo_moneda == 'Dolares')
                                    $
                                    @endif

                                    {{$item->precio_ahora}}</span>
                                <del>{{$item->precio_antes}}</del>
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-icon-wish"><i class="icon-heart"></i></a>

                                <form action="{{route('agregar.carrito')}}" method="POST" style="margin:0 !important">
                                    @csrf
                                    <input type="hidden" name="cantidad" value="1">
                                    <input type="hidden" value="{{$item->id}}" name="idproducto">
                                    <button class="btn-icon btn-add-cart" type="submit"><i class="icon-bag"></i>AL
                                        CARRITO</button>
                                </form>
                            </div>
                        </div><!-- End .product-details -->
                    </div>
                    @endforeach
                </div>



            </div>

        </div>

    </div>
    </div>



    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2 style="color: white; font-size: xx-large;">Don’t think, begin today!</h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula, sit amet dapibus odio augue eget libero. Morbi tempus mauris a nisi luctus imperdiet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container text-center my-3">
        <div class="container mt-4">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-clock"></i>
                        <div class="feature-box-content">
                            <h3>Beneficios</h3>
                            <p>El ahorro de tiempo y la privacidad son los principales beneficios de tener un gimnasio en
                                casa.</p>
                            <!-- <a href="#" class="btn btn-outline-dark">Get in touch</a> -->
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-md-4 -->

                <div class="col-sm-6 col-md-4">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-star"></i>
                        <div class="feature-box-content">
                            <h3>Rutinas</h3>
                            <p>Seguir una rutina de ejercicios es crucial tanto para desahogarse como para fortalecer el
                                sistema inmunitario.</p>
                            <!-- <a href="#" class="btn btn-outline-dark">Return Policy</a> -->
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-md-4 -->

                <div class="col-sm-6 col-md-4">
                    <div class="feature-box feature-box-simple text-center">
                        <i class="icon-check"></i>
                        <div class="feature-box-content">
                            <h3>Empieza ahora</h3>
                            <p>La situación actual no puede ser una excusa para volvernos sedentarios.</p>
                            <!-- <a href="#" class="btn btn-outline-dark">Lear More</a> -->
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-md-4 -->
            </div>
        </div><!-- End .container -->
    </div>
    <div class="mb-4"></div><!-- margin -->
</main><!-- End .main -->
@endsection

@section('scripts')
<script>
    $('#myCarousell').carousel({
        interval: 1000
    })
</script>
@endsection