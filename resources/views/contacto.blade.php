@extends('layouts.users')
@section('user-content')
<main class="main">
    <div class="container mt-4">
       

        <div class="row">
            <div class="col-md-8">
                <h2 class="light-title">Escríbenos <strong>ahora</strong></h2>
                @if(Session::has('success'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        {{Session::get('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if(Session::has('danger'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{Session::get('danger')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <form action="{{route('contacto.send')}}" method="POST">
                    @csrf
                    <div class="form-group required-field">
                        <label for="contact-name">Nombres y apellidos</label>
                        <input type="text" class="form-control" id="contact-name" name="nombres" required placeholder="Nombres y apellidos completos" value="{{old('nombres')}}">
                        @if ($errors->has('nombres'))
                            <span class="help-block" style="color: #ff0000">{{ $errors->first('nombres') }}</span><br>
                        @endif
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label for="contact-email">Correo Electrónico</label>
                        <input type="email" class="form-control" id="contact-email" name="correo" required placeholder="Ingresa tu correo" value="{{old('correo')}}">
                        @if ($errors->has('correo'))
                            <span class="help-block" style="color: #ff0000">{{ $errors->first('correo') }}</span><br>
                        @endif
                    </div><!-- End .form-group -->

                    <div class="form-group">
                        <label for="contact-phone">Teléfono</label>
                        <input type="tel" class="form-control" id="contact-phone" name="telefono" placeholder="Ingresa tu telefono" value="{{old('telefono')}}">
                        @if ($errors->has('telefono'))
                            <span class="help-block" style="color: #ff0000">{{ $errors->first('telefono') }}</span><br>
                        @endif
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label for="contact-message">¿En qué podemos ayuarte?</label>
                        <textarea cols="30" rows="1" id="contact-message" class="form-control" name="mensaje" required placeholder="Escribe tu consulta">{{old('mensaje')}}</textarea>
                        @if ($errors->has('mensaje'))
                            <span class="help-block" style="color: #ff0000">{{ $errors->first('mensaje') }}</span><br>
                        @endif
                    </div><!-- End .form-group -->

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary" style="background: #232f3e; border: transparent;">Enviar</button>
                    </div><!-- End .form-footer -->
                </form>
            </div><!-- End .col-md-8 -->

            <div class="col-md-4">
                <h2 class="light-title">Datos de <strong>Contacto</strong></h2>

                <div class="contact-info">
                    <div>
                        <i class="icon-mobile"></i>
                        <p><a href="tel:">+51 923160484</a></p>
                        <p>Lun – Sab / 8:00AM – 8:00PM</p>
                    </div>
                    <div>
                        <i class="icon-mail-alt"></i>
                        <p><a href="mailto:#">aaqz1508@gmail.com</a></p>
                        <p><a href="https://www.instagram.com/keep_going_eirl/">Instagran: Keep Going EIRL</a></p>
                    </div>
                </div><!-- End .contact-info -->
            </div><!-- End .col-md-4 -->
        </div><!-- End .row -->
    </div>
</main>

@endsection