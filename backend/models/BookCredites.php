<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bookCredites".
 *
 * @property int $id
 * @property int $crediteId
 * @property int $bookId
 *
 * @property Credites $credite
 * @property Books $book
 */
class BookCredites extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bookCredites}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['crediteId', 'bookId'], 'required'],
            [['crediteId', 'bookId'], 'integer'],
            [['crediteId'], 'exist', 'skipOnError' => true, 'targetClass' => Credites::className(), 'targetAttribute' => ['crediteId' => 'id']],
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
            'crediteId' => 'Credite ID',
            'bookId' => 'Book ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCredite()
    {
        return $this->hasOne(Credites::className(), ['id' => 'crediteId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Books::className(), ['id' => 'bookId']);
    }

    /**
     * @inheritdoc
     * @return \backend\queries\BookCreditesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\queries\BookCreditesQuery(get_called_class());
    }
}
