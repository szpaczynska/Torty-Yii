<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Cream]].
 *
 * @see Cream
 */
class CreamQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Cream[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Cream|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
