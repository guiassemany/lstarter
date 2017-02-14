<?php

namespace LStarter\Modules\Core\Http\Transformers;

use League\Fractal\TransformerAbstract;
use Caffeinated\Modules\Modules;

class ModuleTransformer extends TransformerAbstract
{

    /**
     * Turn this item object into a generic array
     *
     * @param Modules $module
     * @return array
     */
    public function transform(Modules $module)
    {
        return [

        ];
    }

}