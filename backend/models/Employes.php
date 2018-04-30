<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employes".
 *
 * @property int $id
 * @property int $userId
 * @property string $img
 *
 * @property BookEmples[] $bookEmples
 * @property User $user
 */
class Employes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%employes}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userId'], 'required'],
            [['userId'], 'integer'],
            [['img'], 'string', 'max' => 300],
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
            'userId' => 'User ID',
            'img' => 'Img',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookEmples()
    {
        return $this->hasMany(BookEmples::className(), ['empId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }

    /**
     * @inheritdoc
     * @return \backend\queries\EmployesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\queries\EmployesQuery(get_called_class());
    }
}
