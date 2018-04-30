<?php

use yii\db\Migration;

/**
 * Handles the creation of table `bookkeys`.
 */
class m180425_110928_create_bookkeys_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bookkeys}}', [
            'id' => $this->primaryKey(),
            'bookId'=>$this->integer(11)->notNull(),
            'tagId'=>$this->integer(11)->notNull()
        ]);
        $this->createIndex('bk','{{%bookkeys}}','bookId');
        $this->createIndex('bk2','{{%bookkeys}}','tagId');

        $this->addForeignKey('fkbk1','{{%bookkeys}}','bookId','{{%books}}','id');
        $this->addForeignKey('fkbk2','{{%bookkeys}}','tagId','{{%tagKeys}}','id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bookkeys}}');
    }
}
