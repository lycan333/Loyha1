<?php

use yii\db\Migration;

/**
 * Handles the creation of table `languages`.
 */
class m180425_110628_create_languages_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('languages', [
            'id' => $this->primaryKey(),
            'lang'=>$this->string(300),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('languages');
    }
}
