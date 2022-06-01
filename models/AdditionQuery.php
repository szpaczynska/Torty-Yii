<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Addition]].
 *
 * @see Addition
 */
class AdditionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Addition[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Addition|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
