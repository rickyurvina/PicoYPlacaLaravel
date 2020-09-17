@extends('layout')
@section('content')
    <!-- page content -->
    <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="clearfix"></div>
                    <br/>
                </div>
            </div>
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Pico y Placa</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                            </div>
                            <div class="x_content">
                                <br/>
                                <form action="restriction" method="POST">
                                    @csrf
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                               for="fecha">Ingrese la Fecha<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="date"
                                                   id="fecha"
                                                   value="{{old('fecha',$request->fecha ?? '')}}"
                                                   name="fecha"
                                                   required="required"
                                                   class="form-control ">
                                        </div>
                                        <div>
                                             <span class="fa fa-location-arrow  form-control-feedback right"
                                                   aria-hidden="true"></span>
                                            {!! $errors->first('fecha','<small class="alert-error">:message</small>') !!}
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="hora">Ingrese
                                            la Hora<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="time"
                                                   id="hora"
                                                   value="{{old('hora',$request->hora ?? '')}}"
                                                   name="hora"
                                                   required="required"
                                                   class="form-control">
                                        </div>
                                        <div>
                                             <span class="fa fa-location-arrow  form-control-feedback right"
                                                   aria-hidden="true"></span>
                                            {!! $errors->first('hora','<small class="alert-error">:message</small>') !!}
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="middle-name"
                                               class="col-form-label col-md-3 col-sm-3 label-align">Placa /
                                            Vehiculo</label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input
                                                   type="text"
                                                   name="letras"
                                                   id="letras"
                                                   style="width : 60px; heigth : 1px"
                                                   value="{{old('letras',$request->letras ?? '')}}"
                                                   maxlength="3"
                                            >|
                                            <input type="number"
                                                   id="digitos_numericos"
                                                   name="digitos_numericos"
                                                   max="9999"
                                                   style="width : 60px; heigth : 1px"
                                                   value="{{old('digitos_numericos',$request->digitos_numericos ?? '')}}"
                                                   min="000">
                                        </div>
                                        <div>
                                             <span class="fa fa-location-arrow  form-control-feedback right"
                                                   aria-hidden="true"></span>
                                            {!! $errors->first('letras','<small class="alert-error">:message</small>') !!}
                                            {!! $errors->first('digitos_numericos','<small class="alert-error">:message</small>') !!}
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="item form-group">
                                        <div class="col-md-6 col-sm-6 offset-md-3">
                                            <button type="submit" class="btn btn-success">Verificar</button>
                                        </div>
                                    </div>
                                </form>
                                @if(!empty($mensaje))
                                    <div>
                                        <div class="alert alert-primary" role="alert">
                                            <h2>El día: {{$nombre_dia ?? ''}} {{$request->hora ?? ''}} La
                                                placa {{$placa ?? ''}}
                                                : {{$mensaje ?? ''}}</h2>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

    </body>


@endsection
