<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index(Request $request)
    {

        $name = "Donal Trump";
        $age = "75";
        $id = $request->id;

        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        $cookieName = 'access_token';
        $value = '123-XYZ';
        $minute = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        $cookie = cookie(
            $cookieName,
            $value,
            $minute,
            $path,
            $domain,
            $secure,
            $httpOnly
        );
        return response($data, 200)->cookie($cookie);
    }
}
