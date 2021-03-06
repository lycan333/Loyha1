<?php

namespace backend\queries;

/**
 * This is the ActiveQuery class for [[\backend\models\BookCredites]].
 *
 * @see \backend\models\BookCredites
 */
class BookCreditesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\BookCredites[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\BookCredites|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
