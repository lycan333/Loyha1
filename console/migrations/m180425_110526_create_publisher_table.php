<?php

use yii\db\Migration;

/**
 * Handles the creation of table `publisher`.
 */
class m180425_110526_create_publisher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('publisher', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(100),
            'website'=>$this->string(300),
            'about'=>$this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('publisher');
    }
}
