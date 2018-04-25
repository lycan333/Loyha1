<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employes`.
 */
class m180425_110742_create_employes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employes', [
            'id' => $this->primaryKey(),
            'userId'=>$this->integer(11)->notNull()
        ]);
        $this->createIndex('emp1','employes','userId');

        $this->addForeignKey('fkemp1','employes','userId','user','id','cascade','cascade');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fkemp1','employes');
        $this->dropIndex('emp1','employes');
        $this->dropTable('employes');
    }
}
