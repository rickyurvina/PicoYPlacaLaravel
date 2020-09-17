@extends('layout')
@section('content')
    <div>
        <form action="restriction" method="POST">
            @csrf
{{--            @method('POST')--}}
            <label for="">Ingresar Fecha
                <input
                    type="date"
                    id="fecha"
                    value="{{old('fecha',$request->fecha ?? '')}}"
                    name="fecha">
                <div>
                    {!! $errors->first('fecha','<small class="alert-error">:message</small>') !!}
                </div>
            </label>
                <label for="">Ingrese Hora</label>
                <input
                    type="time"
                    id="hora"
                    value="{{old('hora',$request->hora ?? '')}}"
                    name="hora">
                <div>
                    {!! $errors->first('hora','<small class="alert-error">:message</small>') !!}
                </div>
            <label for="">Ingresar Placa
                <input type="text"
                       name="letras"
                       id="letras"
                       value="{{old('letras',$request->letras ?? '')}}"
                       maxlength="3">|
                <input type="number"
                       id="digitos_numericos"
                       name="digitos_numericos"
                       max="9999"
                       value="{{old('digitos_numericos',$request->digitos_numericos ?? '')}}"
                       min="000">
                <div>

                    {!! $errors->first('letras','<small class="alert-error">:message</small>') !!}

                    {!! $errors->first('digitos_numericos','<small class="alert-error">:message</small>') !!}

                </div>
            </label>
            <br>
            <button type="submit"
                    class="btn btn-success"
            <i class="fa fa-upload"></i>
            Calcular
            </button>
        </form>
        <div>
            <div>
                <label for="">Fecha: {{$request->fecha ?? ''}}</label>
            </div>
            <div>
                <label for="">Hora: {{$request->hora ?? ''}}</label>
            </div>
            <div>
                <label for="">Placa: {{$placa ?? ''}}</label>
            </div>
            <div>
                <h2>Buenos dias hoy es {{$nombre_dia ?? ''}}</h2>
            </div>
            <div>
                <h2> {{$mensaje ?? ''}}</h2>
            </div>
        </div>
    </div>
@endsection
