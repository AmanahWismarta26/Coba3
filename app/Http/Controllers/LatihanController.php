<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function showMyname()
    {

        $data = [
            "name" => "Amanah",
            "age" => "17",
            "address" => "Mertoyudan, Magelang"
        ];

        return view('myName', compact(['data']));
    }
}
