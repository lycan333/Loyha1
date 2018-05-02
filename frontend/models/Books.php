<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "library_books".
 *
 * @property int $id
 * @property string $title
 * @property int $pageSize
 * @property string $img
 * @property string $EditionYear
 * @property int $editions
 * @property string $ISBN
 * @property int $publisherId
 * @property int $prince
 * @property string $qrcode
 * @property int $categoryId
 * @property int $langId
 *
 * @property BookAuthors[] $bookAuthors
 * @property BookCredites[] $bookCredites
 * @property BookEmples[] $bookEmples
 * @property Bookkeys[] $bookkeys
 * @property Publisher $publisher
 * @property Categories $category
 * @property Languages $lang
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'library_books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pageSize', 'editions', 'publisherId', 'prince', 'categoryId', 'langId'], 'integer'],
            [['EditionYear'], 'required'],
            [['EditionYear'], 'safe'],
            [['title'], 'string', 'max' => 400],
            [['img'], 'string', 'max' => 300],
            [['ISBN'], 'string', 'max' => 20],
            [['qrcode'], 'string', 'max' => 30],
            [['publisherId'], 'exist', 'skipOnError' => true, 'targetClass' => Publisher::className(), 'targetAttribute' => ['publisherId' => 'id']],
            [['categoryId'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['categoryId' => 'id']],
            [['langId'], 'exist', 'skipOnError' => true, 'targetClass' => Languages::className(), 'targetAttribute' => ['langId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'pageSize' => 'Page Size',
            'img' => 'Img',
            'EditionYear' => 'Edition Year',
            'editions' => 'Editions',
            'ISBN' => 'Isbn',
            'publisherId' => 'Publisher ID',
            'prince' => 'Prince',
            'qrcode' => 'Qrcode',
            'categoryId' => 'Category ID',
            'langId' => 'Lang ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookAuthors()
    {
        return $this->hasMany(BookAuthors::className(), ['bookId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookCredites()
    {
        return $this->hasMany(BookCredites::className(), ['bookId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookEmples()
    {
        return $this->hasMany(BookEmples::className(), ['bookId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookkeys()
    {
        return $this->hasMany(Bookkeys::className(), ['bookId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublisher()
    {
        return $this->hasOne(Publisher::className(), ['id' => 'publisherId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'categoryId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Languages::className(), ['id' => 'langId']);
    }
}
