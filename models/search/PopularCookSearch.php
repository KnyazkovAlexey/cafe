<?php

namespace app\models\search;

use app\models\Cook;
use Yii;
use yii\base\Model;

class PopularCookSearch extends Model
{
    public $from;
    public $to;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from', 'to'], 'required'],
            [['from', 'to'], 'date', 'format' => 'php:Y-m-d'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function formName()
    {
        return '';
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function search($params): array
    {
        $this->load($params);

        if (!$this->validate()) {
            return [];
        }

        return Cook::find()
            ->select(['cooks.id AS cook_id', 'cooks.name AS cook_name', 'COUNT(*) AS dishes_count'])
            ->innerJoin('menu_positions', 'menu_positions.cook_id = cooks.id')
            ->innerJoin('check_positions', 'check_positions.menu_position_id = menu_positions.id')
            ->where(['between', 'check_positions.created_at', strtotime($this->from), strtotime($this->to)])
            ->groupBy(['cooks.id'])
            ->orderBy(['dishes_count' => SORT_DESC])
            ->limit(Yii::$app->params['popularCooksLimit'])
            ->asArray()
            ->all();
    }
}
