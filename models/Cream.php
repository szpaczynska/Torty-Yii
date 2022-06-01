<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cream".
 *
 * @property int $id_c
 * @property string $name
 * @property float $price
 */
class Cream extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cakes.cream';
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
            'id_c' => 'Id C',
            'name' => 'Name',
            'price' => 'Price',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CreamQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CreamQuery(get_called_class());
    }
}
