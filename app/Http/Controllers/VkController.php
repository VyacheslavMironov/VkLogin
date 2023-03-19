<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class VkController extends Controller
{
    public function index()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function callback(Request $request)
    {
        $user = Socialite::driver('vkontakte')->stateless()->user();
        $email = $user->getEmail();
        $name = $user->getName();
        $password = Hash::make("123123123");
        return ['name' => $name, 'email' => $email, 'password' => $password];
//        return $request;
    }
    public function test()
    {
        return 123;
    }
}
