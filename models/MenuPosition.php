<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table `{{%menu_positions}}`.
 *
 * @property int $id
 * @property int $cook_id
 * @property string $name
 * @property float $price
 * @property bool $is_available
 * @property int $created_at
 */
class MenuPosition extends \yii\db\ActiveRecord
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
        return '{{%menu_positions}}';
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
            [['cook_id', 'name', 'price'], 'required'],
            [['cook_id', 'created_at'], 'integer'],
            [['name'], 'string'],
            [['price'], 'double'],
            [['is_available'], 'boolean'],
            ['is_available', 'default', 'value' => true],
            ['cook_id', 'exist', 'targetClass' => Cook::class, 'targetAttribute' => 'id'],
        ];
    }
}
