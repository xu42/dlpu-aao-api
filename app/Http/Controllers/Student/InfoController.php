<?php

namespace App\Http\Controllers\Student;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Xu42\Qznjw2014\Qznjw2014;

class InfoController extends BaseController
{
    public function get( Request $request )
    {
        $userId = $request->input( 'userId', null );

        $modelStudent = (new \App\Library\Student)->getById( $userId );

        $eduSystem = new Qznjw2014( $modelStudent->username, $modelStudent->password );

        return response()->json( ['message' => 'Success', 'data' => $eduSystem->userinfo()], 200 );
    }

}
