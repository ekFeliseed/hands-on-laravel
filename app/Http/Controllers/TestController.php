<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;



    public function index() {

        $a = 0;

        $b = 12;

        $c = $a + $b;

        $d = $c * 2;

        $e = $d / 2;

        $f = $e - 2;

        $users = [
            [ 'name' => 'Emilien', 'age' => '33'],
            [ 'name' => 'Julien', 'age' => '32'],
            [ 'name' => 'Jean', 'age' => '31']
        ];


        return view('test', compact('users'));

    }




}
