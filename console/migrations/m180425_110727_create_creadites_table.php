<?php

use yii\db\Migration;

/**
 * Handles the creation of table `creadites`.
 */
class m180425_110727_create_creadites_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%credites}}', [
            'id' => $this->primaryKey(),
            'role'=>$this->string(100),
            'authorId'=>$this->integer(11)->notNull(),
        ]);
        $this->createIndex('ci1','{{%credites}}','authorId');

        $this->addForeignKey('fkcredites1','{{%credites}}','authorId','{{%authors}}','id','cascade','cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('creadites');
    }
}
