<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function controllerMethod() {

        // any code here
        return response()->json([
            'msg' => 'We shoud return only json'
        ]);
    }
}
