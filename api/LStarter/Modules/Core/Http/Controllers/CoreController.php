<?php

namespace LStarter\Modules\Core\Http\Controllers;

class CoreController extends BaseController
{
    public function index(){
        return $this->success('Core Module Response');
    }
}