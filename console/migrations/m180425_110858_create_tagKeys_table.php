<?php

use yii\db\Migration;

/**
 * Handles the creation of table `tagKeys`.
 */
class m180425_110858_create_tagKeys_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('tagKeys', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(200),
            'value'=>$this->double(11)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('tagKeys');
    }
}
