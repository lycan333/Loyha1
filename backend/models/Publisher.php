<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "publisher".
 *
 * @property int $id
 * @property string $name
 * @property string $website
 * @property string $about
 *
 * @property Books[] $books
 */
class Publisher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'publisher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['about'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['website'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'website' => 'Website',
            'about' => 'About',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['publisherId' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\queries\PublisherQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\queries\PublisherQuery(get_called_class());
    }
}
