<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "addition".
 *
 * @property int $id_a
 * @property string $name
 * @property float $price
 */
class Addition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cakes.addition';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_a' => 'Id A',
            'name' => 'Name',
            'price' => 'Price',
        ];
    }

    /**
     * {@inheritdoc}
     * @return AdditionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AdditionQuery(get_called_class());
    }
}
