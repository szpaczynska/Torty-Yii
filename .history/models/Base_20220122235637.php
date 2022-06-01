<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "base".
 *
 * @property int $id_b
 * @property string $name
 * @property float $price
 */
class Base extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cakes.base';
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
            'id_b' => 'id_b',
            'name' => 'Name',
            'price' => 'Price',
        ];
    }

    /**
     * {@inheritdoc}
     * @return BaseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BaseQuery(get_called_class());
    }

    public static function price($id)
    {
        if($this->id_b == $id)
        return $this->price;
    }
}
