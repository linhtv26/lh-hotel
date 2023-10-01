<?php

namespace App\Service;

use App\Model\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

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
}