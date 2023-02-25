<?php

namespace App\Http\Controllers;

class UserController extends Controller {
    public function usersData() {
        $users = ["Arif", "Afrina", "Akhi"];
        return view( "users", ["users" => $users] );
    }
}
