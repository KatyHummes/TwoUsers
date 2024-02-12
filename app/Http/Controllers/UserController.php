<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function register(Request $request)
    {
        // Validação do request, por exemplo:
        $request->validate([
            // suas regras de validação...
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'type' => 'required|in:seller,buyer', // Garante que o tipo seja 'seller' ou 'buyer'
        ]);

        // Criação do usuário
        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'type' => $request->type, // 'seller' ou 'buyer'
            // outros campos necessários...
        ]);

        // Redirecionamento ou retorno após a criação do usuário
        // Por exemplo, redirecionar para a página de login ou retornar uma resposta JSON
        return redirect()->route('login')->with('success', 'Conta criada com sucesso!');
    }
}
