<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "library_bookkeys".
 *
 * @property int $id
 * @property int $bookId
 * @property int $tagId
 *
 * @property Books $book
 * @property TagKeys $tag
 */
class Bookkeys extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'library_bookkeys';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bookId', 'tagId'], 'required'],
            [['bookId', 'tagId'], 'integer'],
            [['bookId'], 'exist', 'skipOnError' => true, 'targetClass' => Books::className(), 'targetAttribute' => ['bookId' => 'id']],
            [['tagId'], 'exist', 'skipOnError' => true, 'targetClass' => TagKeys::className(), 'targetAttribute' => ['tagId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bookId' => 'Book ID',
            'tagId' => 'Tag ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Books::className(), ['id' => 'bookId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTag()
    {
        return $this->hasOne(TagKeys::className(), ['id' => 'tagId']);
    }
}
