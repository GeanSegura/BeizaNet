<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutenLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('autenLogin.login');
    }


    public function login(Request $request)
    {
        

        $request->validate([
            'usuario' => 'required',
            'contrasena' => 'required',
        ]);

        $result = DB::select('CALL sp_validar_usuario(?, ?)', [$request->usuario, $request->contrasena]);

        $valorRetornado = $result[0];

     
        
        if ($valorRetornado <> '0'){
            session(['codigo_usuario' => $valorRetornado]);
            session(['nombre_usuario' => $request->usuario]);
            return redirect()->route('cobroVentas')->with('success', 'Inicio de sesión exitoso.');
            
        }
        // if (!empty($user)) {
        //     Session::put('username', $user[0]->username);
            
        // }
        // return redirect()->back()->withErrors(['username' => 'Credenciales incorrectas.']);
    }


    public function logout()
    {
        Session::flush(); 
        return redirect()->route('autenLogin.login')->with('success', 'Sesión cerrada.');
    }
}
