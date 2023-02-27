<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Support\Facades\DB;

class PeopleController extends Controller {
    function allPeople() {

        //return ((array) DB:: table('people')->where('id', '>',1)->first());
        return ( DB::table( 'people' )
            //->select(['id', 'name'])
                ->where( 'id', '>', 2 )
                ->where( 'id', '<', 4 )->orderBy( 'id', 'desc' )
                ->limit( 3 )
                ->get( ['id', 'name'] ) );
        //return (DB::select("select id, name from people")); ·
    }

    function testModel() {

        //$people = People::all()->skip (1) ->take (2);
        // $people People::find(1);
        //$people =People::where('id', '>',1)->where('id', '<',4)->get();
        //$people People::where('id', '>',1)->count(); =
        // $person = People::whereEmail( 'jessy@doe.com' )->first();
        //$person People::whereName('John Doe II')->first()->displayName AndEmail(); =
        $person = People::find( 1 );
        $person->name = "John Doe";
        $person->save();

        // $person = $person->fresh();
        return $person;
    }
}
