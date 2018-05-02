<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "library_bookAuthors".
 *
 * @property int $id
 * @property int $authorId
 * @property int $bookId
 *
 * @property Authors $author
 * @property Books $book
 */
class BookAuthors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'library_bookAuthors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['authorId', 'bookId'], 'required'],
            [['authorId', 'bookId'], 'integer'],
            [['authorId'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::className(), 'targetAttribute' => ['authorId' => 'id']],
            [['bookId'], 'exist', 'skipOnError' => true, 'targetClass' => Books::className(), 'targetAttribute' => ['bookId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'authorId' => 'Author ID',
            'bookId' => 'Book ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Authors::className(), ['id' => 'authorId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Books::className(), ['id' => 'bookId']);
    }
}
