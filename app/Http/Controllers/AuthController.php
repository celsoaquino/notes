<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use PDOException;

class AuthController extends Controller
{
    public function login(Request $request): View
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        request()->validate([
            'username' => 'required|email',
            'password' => 'required|min:6|max:16',
        ], [
            'username.required' => 'Username é obrigatorio.',
            'password.required' => 'Password é obrigatorio.',
            'password.min' => 'Password deve ter pelo menos 6 caracteres.',
            'password.max' => 'Password deve ter no maximo 16 caracteres.',
            'username.email' => 'Username deve ser um email.',
        ]);

        $credentials = $request->only('username', 'password');

        $user = User::where('username', $credentials['username'])
            ->where('deleted_at', NULL)
            ->first();

        if (!$user) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errorLogin', 'Username ou passoword incorretos.');
        }

        if (!password_verify($credentials['password'], $user->password)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errorLogin', 'Username ou passoword incorretos.');
        }

        $user->last_login = date('Y-m-d H:i:s');
        $user->save();

        session([
            'user' => [
                'id' => $user->id,
                'username' => $user->username,
            ]
        ]);

        return redirect()->to('/');
    }

    public function logout()
    {
       session()->forget('user');
       return redirect()->to('/login');
    }
}
