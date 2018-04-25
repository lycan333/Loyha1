<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bookEmples`.
 */
class m180425_110836_create_bookEmples_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bookEmples', [
            'id' => $this->primaryKey(),
            'bookId'=>$this->integer(11)->notNull(),
            'empId'=>$this->integer(11)->notNull(),
            'gettingDate'=>$this->date()->notNull(),

        ]);
        $this->createIndex('be1','bookEmples','bookId');
        $this->createIndex('be2','bookEmples','empId');

        $this->addForeignKey('fkadas','bookEmples','bookId','books','id','cascade','cascade');
        $this->addForeignKey('fkada2','bookEmples','empId','employes','id','cascade','cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('bookEmples');
    }
}
