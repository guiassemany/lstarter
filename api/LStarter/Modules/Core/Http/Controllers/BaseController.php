<?php

namespace LStarter\Modules\Core\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    use Helpers;

    public function success($data, $status = 200, $headers = [], $options = 0){
        return response()->json($data, $status, $headers, $options);
    }
}