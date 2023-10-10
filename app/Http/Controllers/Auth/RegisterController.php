<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Model\User;
use App\Service\AuthService;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
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

    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterUserRequest $request)
    {
        $formData = $request->all();

        //handle logic + query database
        if ($this->authService->createNewUser($formData)) {
            return redirect()->route('login')->with('success_message', 'You have successfully registered. Let \'s login');
        }

        return false;
    }
}
