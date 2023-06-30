<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthentificationController extends Controller
{
    public function AuthentificationLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $info_authentification = $request->validate([
            'name' => 'required',
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ]);
        
        if (Auth::attempt($info_authentification)) {
            // L'authentification a réussi
            return redirect()->intended('/dashboard_propection');
        } else {
            dd("echec");
            // L'authentification a échoué
            return back()->withErrors([
                'message' => 'Identifiants invalides. Veuillez réessayer.',
            ]);
        }
    }
    public function logout(Request $request)
    {
       //methode qui gere la deconnexion 
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/accueil_prospection');
    }
}
