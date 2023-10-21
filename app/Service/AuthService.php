<?php

namespace App\Service;

use App\Model\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthService extends BaseService
{
    public function createNewUser($accountInfo)
    {
        $name = "Ha Noi_".Carbon::now();
        $email = $accountInfo['email'];
        $password = Hash::make($accountInfo['password']);

        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
    }

    public function handleLogin($infoLogin)
    {
        if (Auth::attempt($infoLogin)) {
            return true;
        }

        return false;
    }
}