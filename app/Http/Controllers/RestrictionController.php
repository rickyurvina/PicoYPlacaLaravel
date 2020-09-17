<?php

namespace App\Http\Controllers;

use App\Models\Restriction;
use Illuminate\Http\Request;
use App\Http\Requests\RestrictionRequest;

class RestrictionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('restriction');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param RestrictionRequest $request
     * @return array
     */
    public function restrictions(RestrictionRequest $request)
    {
//        return $request->validated();
        $nombre_dia=$day=date('w', strtotime($request->fecha));
        $placa=$request->letras.$request->digitos_numericos;
        $ultimo_digito=substr($placa,-1);
        $hora_dia=$request->hora;
        $mensaje="";

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
//        if (($hora_dia>='16:00' && $hora_dia <='19:30') || ($hora_dia >='07:00' && $hora_dia<='09:30'))
//        {
//            $mensaje=" No Puede Circular Libremente";
//        }
//        else{
//            $mensaje="Puede Circular Libremente Libremente";
//        }

        return view('restriction',compact('request','nombre_dia','mensaje','placa'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restriction  $restriction
     * @return \Illuminate\Http\Response
     */
    public function show(Restriction $restriction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restriction  $restriction
     * @return \Illuminate\Http\Response
     */
    public function edit(Restriction $restriction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restriction  $restriction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restriction $restriction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restriction  $restriction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restriction $restriction)
    {
        //
    }
}
