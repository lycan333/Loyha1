<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "library_categories".
 *
 * @property int $id
 * @property string $name
 * @property string $descriptions
 *
 * @property Books[] $books
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'library_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descriptions'], 'string'],
            [['name'], 'string', 'max' => 300],
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
            'descriptions' => 'Descriptions',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['categoryId' => 'id']);
    }
}
