<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {

    public function fileUpload( Request $request ) {
        return $request->file( "file" )->store( "img" );

    }

}
