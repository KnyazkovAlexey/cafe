<?php

namespace app\modules\api\modules\v1\controllers;

use app\models\Cook;
use app\models\search\PopularCookSearch;
use Yii;

class CooksController extends BaseController
{
    /**
     * @inheridoc
     */
    public $modelClass = Cook::class;

    public function actionPopular()
    {
        $searchModel = new PopularCookSearch();

        return $searchModel->search(Yii::$app->request->queryParams);
    }
}