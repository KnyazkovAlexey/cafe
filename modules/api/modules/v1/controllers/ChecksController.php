<?php

namespace app\modules\api\modules\v1\controllers;

use app\models\Check;

class ChecksController extends BaseController
{
    /**
     * @inheridoc
     */
    public $modelClass = Check::class;
}