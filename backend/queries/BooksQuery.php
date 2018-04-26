<?php

namespace backend\queries;

/**
 * This is the ActiveQuery class for [[\backend\models\Books]].
 *
 * @see \backend\models\Books
 */
class BooksQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\Books[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\Books|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
