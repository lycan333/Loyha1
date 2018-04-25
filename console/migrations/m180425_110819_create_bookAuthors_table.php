<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bookAuthors`.
 */
class m180425_110819_create_bookAuthors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('bookAuthors', [
            'id' => $this->primaryKey(),
            'authorId'=>$this->integer(11)->notNull(),
            'bookId'=>$this->integer(11)->notNull()
        ]);
        $this->createIndex('ba','bookAuthors','authorId');
        $this->createIndex('ba2','bookAuthors','bookId');

        $this->addForeignKey('fkba','bookAuthors','authorId','authors','id','cascade','cascade');
        $this->addForeignKey('fkba2','bookAuthors','bookId','books','id','cascade','cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('bookAuthors');
    }
}
