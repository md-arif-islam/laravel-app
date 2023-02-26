<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function loginForm( Request $request ) {
        return $request->input();
    }
}
