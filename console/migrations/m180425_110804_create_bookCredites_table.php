<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bookCredites`.
 */
class m180425_110804_create_bookCredites_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bookCredites}}', [
            'id' => $this->primaryKey(),
            'crediteId'=>$this->integer(11)->notNull(),
            'bookId'=>$this->integer(11)->notNull()
        ]);
        $this->createIndex('bc1','{{%bookCredites}}','crediteId');
        $this->createIndex('bc2','{{%bookCredites}}','bookId');

        $this->addForeignKey('fkbc1','{{%bookCredites}}','crediteId','{{%credites}}','id','cascade','cascade');
        $this->addForeignKey('fkbc2','{{%bookCredites}}','bookId','{{%books}}','id','cascade','cascade');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bookCredites}}');
    }
}
