<?php

namespace LStarter\Modules\Core\Http\Controllers;

use Caffeinated\Modules\Facades\Module;
use LStarter\Modules\Core\Http\Transformers\ModuleTransformer;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CoreController extends BaseController
{
    public function index(){
        return $this->success('Core Module Response');
    }

    public function listModules(){
        $modules = Module::all();
        return $this->success($modules);
    }

    public function showModule($moduleSlug){
        $module = Module::where('slug', $moduleSlug);
        return $this->success($module);
    }
}