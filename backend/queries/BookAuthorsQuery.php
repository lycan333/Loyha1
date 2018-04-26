<?php

namespace backend\queries;

/**
 * This is the ActiveQuery class for [[\backend\models\BookAuthors]].
 *
 * @see \backend\models\BookAuthors
 */
class BookAuthorsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\BookAuthors[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\BookAuthors|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
