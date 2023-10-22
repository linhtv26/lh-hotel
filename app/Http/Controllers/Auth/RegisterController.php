<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Mail\SuccessRegistration;
use App\Model\User;
use App\Service\AuthService;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Mail;
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
            Mail::to($request->input('email'))->send(new SuccessRegistration());
            return redirect()->route('login')
                ->with([
                    'success_message' => 'You have successfully registered. Let \'s login',
                    'success_register' => 'Great! Login to join us.'
                ]);
        }

        return false;
    }
}
