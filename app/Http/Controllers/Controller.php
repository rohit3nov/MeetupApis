<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{

    public $reqObj;
    protected $params;

    public function __construct(Request $request){
        $this->params = $request->all();
        $this->reqObj = $request;
    }

}
