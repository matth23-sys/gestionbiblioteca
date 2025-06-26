<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Registro de usuario
   public function register(Request $request)
{
    // Validar los datos
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
       'password' => 'required|string|min:6|confirmed',
    ], [
        'email.unique' => 'El correo ya está registrado.',
        'password.confirmed' => 'Las contraseñas no coinciden.',
        'password.min' => 'La contraseña debe tener al menos 6 caracteres.',
    ]);

    // Crear nuevo usuario
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();

    if ($someConditionFails) {
    return redirect()->back()->with('error', 'No se pudo completar el registro');
}



    // Iniciar sesión automáticamente
    Auth::login($user);

    // Redirigir a ruta home
    return redirect(route('home'));
}


    public function login(Request $request)
    {
        // Validación
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
            //"active" => true
        ];

        $remember = ($request->has('remember') ? true : false);

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        } else {
          return redirect()->back()->with('error', 'Usuario no encontrado o credenciales incorrectas');

            
        }
    }

    // Logout de usuario
    public function logout(Request $request)
    {
        Auth::logout(); // Cierra la sesión
        $request->session()->invalidate(); // Invalida la sesión
        $request->session()->regenerateToken(); // Regenera token CSRF

        return redirect(route('login')); // Redirige al login
    }
}
