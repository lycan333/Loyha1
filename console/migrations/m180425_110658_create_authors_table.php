<?php

use yii\db\Migration;

/**
 * Handles the creation of table `authors`.
 */
class m180425_110658_create_authors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('authors', [
            'id' => $this->primaryKey(),
            'FIO'=>$this->string(300)->notNull(),
            'img'=>$this->string(300),
            'userId'=>$this->integer(11)->null(),
            'about'=>$this->text()
        ]);

        $this->createIndex('authors1','authors','userId');

        $this->addForeignKey('fkauthors1','authors','userId','user','id','cascade','cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('authors');
    }
}
