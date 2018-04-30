<?php

namespace backend\queries;

/**
 * This is the ActiveQuery class for [[\backend\models\Authors]].
 *
 * @see \backend\models\Authors
 */
class AuthorsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\Authors[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\Authors|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
