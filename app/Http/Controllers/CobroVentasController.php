<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class CobroVentasController extends Controller
{
    public function mostrarCobroVentas() {

        $codigo_usuario = session('codigo_usuario');
        $nombre_usuario = session('nombre_usuario');
        $p_codigo_usuario = $codigo_usuario->in_codigo_usuario;
        $importe = 0.00;
        $vencidos = 0.00;
        $porcentaje1 = 0;
        $pendientes  = 0.00;
        $porcentaje2= 0;
        $cuentas = '' ;

        $zonas = DB::select('CALL sp_obtener_usuario_zona(?)', [$p_codigo_usuario]);


        return view('cobroVentas', compact('zonas','nombre_usuario','vencidos','porcentaje1','pendientes','porcentaje2','cuentas'));
    }

    public function obtenerDatosZona($zona)
    {   
        session(['codigo-zona' => $zona]);
        $codigo_usuario = session('codigo_usuario');

        $p_codigo_usuario = $codigo_usuario->in_codigo_usuario;
        $cuentas = DB::select('CALL sp_obtener_cuenta_zona(?,?)', [$p_codigo_usuario,$zona]);
        return response()->json($cuentas);
    }

    public function obtenerDatosDocumento($cuenta){

        $codigo_usuario = session('codigo_usuario');
        $p_codigo_usuario = $codigo_usuario->in_codigo_usuario;
        $codigo_zona = session('codigo-zona');
        $p_condigo_zona =$codigo_zona;

        $documentos = DB::select('CALL sp_obtener_documentos_cuenta(?,?,?)', [$p_codigo_usuario,$p_condigo_zona,$cuenta]);
        return response()->json($documentos);
    }

    public function obtenerDocumentoDetalle(){
        $html = view('documentoDetalle')->render(); // Renderiza la vista como HTML
        return response()->json(['html' => $html]);
    }

    public function salir() {
          
            Session::flush(); 
    
            return redirect()->route('login-2')->with('status', 'Has cerrado sesión exitosamente.');
        
    }
}
