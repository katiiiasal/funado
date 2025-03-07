<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class LoginController extends Controller
{
    // Método para mostrar el formulario de login
    public function showLoginForm()
    {
        return view('auth.login'); // Carga tu vista personalizada
    }

    // Método para procesar el login sin encriptación
    public function login(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'usuario' => 'required|string',
            'password' => 'required|string',
        ]);

        // Buscar usuario en la base de datos sin encriptación
        $user = Usuario::where('usuario', $request->usuario)
                    ->where('password', $request->password) // Comparación directa SIN Bcrypt
                    ->first();

        if ($user) {
            Auth::login($user); // Iniciar sesión manualmente
            return redirect()->intended('/usuario'); // Redirigir a la ruta deseada
        }

        // Autenticación fallida
        return back()->withErrors([
            'usuario' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    // Método para cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout(); // Cerrar sesión
        $request->session()->invalidate(); // Invalidar la sesión
        $request->session()->regenerateToken(); // Regenerar el token de sesión
        return redirect('/login'); // Redirigir al login
    }
}
