<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table `{{%check_positions}}`.
 *
 * @property int $id
 * @property int $check_id
 * @property int $menu_position_id
 * @property int $created_at
 */
class CheckPosition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'updatedAtAttribute' => false,
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%check_positions}}';
    }

    /**
     * {@inheritdoc}
     */
    public function formName()
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['check_id', 'menu_position_id'], 'required'],
            [['check_id', 'menu_position_id', 'created_at'], 'integer'],
            ['check_id', 'exist', 'targetClass' => Check::class, 'targetAttribute' => 'id'],
            ['menu_position_id', 'exist', 'targetClass' => MenuPosition::class, 'targetAttribute' => 'id'],
        ];
    }
}
