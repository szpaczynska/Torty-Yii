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
        return 'cake';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'id_b', 'id_c', 'id_a', 'description'], 'required'],
            [['id_b', 'id_c', 'id_a'], 'default', 'value' => null],
            [['id_b', 'id_c', 'id_a'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'id_b' => 'Id B',
            'id_c' => 'Id C',
            'id_a' => 'Id A',
            'description' => 'Description',
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
}
