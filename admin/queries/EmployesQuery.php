<?php

namespace backend\queries;

/**
 * This is the ActiveQuery class for [[\backend\models\Employes]].
 *
 * @see \backend\models\Employes
 */
class EmployesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \backend\models\Employes[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \backend\models\Employes|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
