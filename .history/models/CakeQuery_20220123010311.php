<?php

namespace app\models;
use app\models\Yii;

/**
 * This is the ActiveQuery class for [[Cake]].
 *
 * @see Cake
 */
class CakeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cake[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cake|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
