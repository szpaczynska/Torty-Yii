<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id_z
 * @property int $user_id
 * @property int $cake_id
 * @property string $date
 * @property string|null $note
 * @property bool $paid
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cakes.orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'cake_id', 'date', 'paid'], 'required'],
            [['user_id', 'cake_id'], 'integer'],
            [['date'], 'string'],
            [['paid'], 'boolean'],
            [['note'], 'string', 'max' => 20],
            ['date', function ($attribute, $params, $validator)
            { if (!$this->validateData($this->$attribute))
                {
                     $this->addError($attribute, 'wrong format'.$attribute);
            }}],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'date' => 'Date',
            'note' => 'Note',
        ];
    }

    /**
     * {@inheritdoc}
     * @return OrdersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OrdersQuery(get_called_class());
    }

    public static function validateData($o)
    {
        $spr = preg_match("@\d{1,2}\d{1,2}/\d{4}@",$o);
        return $spr;
    }

}
