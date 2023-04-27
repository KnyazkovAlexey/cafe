<?php

namespace app\modules\api\modules\v1\controllers;

use app\models\CheckPosition;

class CheckPositionsController extends BaseController
{
    /**
     * @inheridoc
     */
    public $modelClass = CheckPosition::class;
}