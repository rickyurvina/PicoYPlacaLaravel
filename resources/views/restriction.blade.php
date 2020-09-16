@extends('layout')
@section('content')
    <div>
        <form action="restriction" method="POST">
            @csrf
{{--            @method('POST')--}}
            <label for="">Ingresar Fecha
                <input
                    type="date"
                    id="date"
                    value="{{old('date',$request->date ?? '')}}"
                    name="date">|
                <input
                    type="time"
                    id="hour"
                    value="{{old('hour',$request->hour ?? '')}}"
                    name="hour">
            </label>
            <br>
            <label for="">Ingresar Placa
                <input type="text"
{{--                       pattern="[A-Za-z]" --}}
                       name="letters"
                       id="letters"
                       value="{{old('letters',$request->letters ?? '')}}"
                       maxlength="3">|
                <input type="number"
                       id="digits"
                       name="digits"
                       max="9999"
                       value="{{old('digits',$request->digits ?? '')}}"
                       min="000">
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
                <label for="">Fecha: {{$request->date ?? ''}}</label>
            </div>
            <div>
                <label for="">Hora: {{$request->hour ?? ''}}</label>
            </div>
            <div>
                <label for="">Placa: {{$request->letters ?? ''}}-{{$request->digits ?? ''}}</label>
            </div>
        </div>
    </div>
@endsection
