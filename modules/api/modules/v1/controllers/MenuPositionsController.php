<?php

namespace app\modules\api\modules\v1\controllers;

use app\models\MenuPosition;

class MenuPositionsController extends BaseController
{
    /**
     * @inheridoc
     */
    public $modelClass = MenuPosition::class;
}