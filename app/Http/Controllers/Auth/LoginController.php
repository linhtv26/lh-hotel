<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Service\AuthService;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    //init services
    private $authService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthService $authService)
    {
        $this->authService= $authService;
    }

    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $loginInfo = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $validLogin = $this->authService->handleLogin($loginInfo);
        if ($validLogin) {
            return redirect()->intended();
        }

        return redirect()->back()->withErrors(['msg' => 'Account is not exits!']);
    }
}
