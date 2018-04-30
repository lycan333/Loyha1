<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property int $id
 * @property string $FIO
 * @property string $img
 * @property int $userId
 * @property string $about
 *
 * @property User $user
 * @property BookAuthors[] $bookAuthors
 * @property Credites[] $credites
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%authors}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FIO'], 'required'],
            [['userId'], 'integer'],
            [['about'], 'string'],
            [['FIO', 'img'], 'string', 'max' => 300],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'FIO' => 'Fio',
            'img' => 'Img',
            'userId' => 'User ID',
            'about' => 'About',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookAuthors()
    {
        return $this->hasMany(BookAuthors::className(), ['authorId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCredites()
    {
        return $this->hasMany(Credites::className(), ['authorId' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\queries\AuthorsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\queries\AuthorsQuery(get_called_class());
    }
}
