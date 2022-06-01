<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cake".
 *
 * @property int $id
 * @property string $name
 * @property int $id_b
 * @property int $id_c
 * @property int $id_a
 * @property string $description
 */

class Cake extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cakes.cake';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'id_b', 'id_c', 'id_a'], 'required'],
            [['id_b', 'id_c', 'id_a'], 'default', 'value' => null],
            [['id_b', 'id_c', 'id_a'], 'integer'],
            [['name'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'id_b' => 'Choose base',
            'id_c' => 'Choose flavour of cream',
            'id_a' => 'Choose addition',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CakeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CakeQuery(get_called_class());
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

}
