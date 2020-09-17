<?php

namespace App\Http\Controllers;

use App\Http\Requests\RestrictionRequest;

class RestrictionController extends Controller
{
    /**
     * Muestra el formulario de ingreso de datos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('restriction');
    }

    /**
     * Recoge los datos ingresados pr el usuario y valida si la placa puede circular o no
     *
     * @param RestrictionRequest $request
     * @return mensaje en vista
     */
    public function restrictions(RestrictionRequest $request)
    {
        $nombre_dia=$day=date('w', strtotime($request->fecha));
        $placa=$request->letras.$request->digitos_numericos;
        $placa=strtoupper($placa);
        $ultimo_digito=substr($placa,-1);
        $hora_dia=$request->hora;
        switch($nombre_dia)
        {
            case 1: $nombre_dia="Lunes";
                if (($ultimo_digito=='1'||$ultimo_digito=='2')&&(($hora_dia>='16:00' && $hora_dia <='19:30') || ($hora_dia >='07:00' && $hora_dia<='09:30')))
                {
                    $mensaje="No puede circular";
                }
                else{
                    $mensaje="Puede Circular Libremente";
                }
                break;
            case 2: $nombre_dia="Martes";
                if (($ultimo_digito=='3'||$ultimo_digito=='4')&&(($hora_dia>='16:00' && $hora_dia <='19:30') || ($hora_dia >='07:00' && $hora_dia<='09:30')))
                {
                    $mensaje="No puede circular";
                }
                else{
                    $mensaje="Puede Circular Libremente";
                }
                break;
            case 3: $nombre_dia="Miercoles";
                if (($ultimo_digito=='5'||$ultimo_digito=='6')&&(($hora_dia>='16:00' && $hora_dia <='19:30') || ($hora_dia >='07:00' && $hora_dia<='09:30')))
                {
                    $mensaje="No puede circular";
                }
                else{
                    $mensaje="Puede Circular Libremente";
                }
                break;
            case 4: $nombre_dia="Jueves";
                if (($ultimo_digito=='7'||$ultimo_digito=='8')&&(($hora_dia>='16:00' && $hora_dia <='19:30') || ($hora_dia >='07:00' && $hora_dia<='09:30')))
                {
                    $mensaje="No puede circular";
                }
                else{
                    $mensaje="Puede Circular Libremente";
                }
                break;
            case 5: $nombre_dia="Viernes";
                if (($ultimo_digito=='9'||$ultimo_digito=='0')&&(($hora_dia>='16:00' && $hora_dia <='19:30') || ($hora_dia >='07:00' && $hora_dia<='09:30')))
                {
                    $mensaje="No puede circular";
                }
                else{
                    $mensaje="Puede Circular Libremente";
                }
                break;
            case 6: $nombre_dia="Sabado";
                $mensaje="Puede Circular Libremente";
                break;
            case 0: $nombre_dia="Domingo";
                $mensaje="Puede Circular Libremente";
                break;
        }
        return view('restriction',compact('request','nombre_dia','mensaje','placa'));
    }
}
