<?php

use yii\db\Migration;

/**
 * Handles the creation of table `books`.
 */
class m180425_110638_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('books', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(400),
            'pageSize'=>$this->integer(11),
            'img'=>$this->string(300),
            'EditionYear'=>$this->date()->notNull(),
            'editions'=>$this->integer(11),
            'ISBN'=>$this->string(20),
            'publisherId'=>$this->integer(11),
            'prince'=>$this->integer(11),
            'qrcode'=>$this->string(30),
            'categoryId'=>$this->integer(11),
            'langId'=>$this->integer(11)
        ]);
        $this->createIndex('book1','books','publisherId');
        $this->createIndex('book2','books','categoryId');
        $this->createIndex('book3','books','langId');

        $this->addForeignKey('fk_book1','books','publisherId','publisher','id','cascade','cascade');
        $this->addForeignKey('fk_book2','books','categoryId','categories','id','cascade','cascade');
        $this->addForeignKey('fk_book3','books','langId','languages','id','cascade','cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fkbook1','books');
        $this->dropForeignKey('fkbook2','books');
        $this->dropForeignKey('fkbook3','books');
        $this->dropTable('books');
    }
}
