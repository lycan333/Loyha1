<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "credites".
 *
 * @property int $id
 * @property string $role
 * @property int $authorId
 *
 * @property BookCredites[] $bookCredites
 * @property Authors $author
 */
class Credites extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'credites';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['authorId'], 'required'],
            [['authorId'], 'integer'],
            [['role'], 'string', 'max' => 100],
            [['authorId'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::className(), 'targetAttribute' => ['authorId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role' => 'Role',
            'authorId' => 'Author ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookCredites()
    {
        return $this->hasMany(BookCredites::className(), ['crediteId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Authors::className(), ['id' => 'authorId']);
    }

    /**
     * @inheritdoc
     * @return \backend\queries\CreditesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\queries\CreditesQuery(get_called_class());
    }
}
