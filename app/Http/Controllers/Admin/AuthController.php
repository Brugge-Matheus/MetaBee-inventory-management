<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminLoginRequest;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('admin.pages.login');
    }

    public function attempt(AdminLoginRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $credentials = [
            'email' => $data['email'],
            'password' => $data['password']
        ];

        if (!Auth::attempt($credentials)) {
            return redirect()->back()
                ->withErrors(['email' => 'As credenciais fornecidas não coincidem com nenhum usúario'])
                ->withInput();
        }

        $request->session()->regenerate();
        return redirect()
            ->intended(route('admin.dashboard'));
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
