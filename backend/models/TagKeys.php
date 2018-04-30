<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tagKeys".
 *
 * @property int $id
 * @property string $name
 * @property double $value
 *
 * @property Bookkeys[] $bookkeys
 */
class TagKeys extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tagKeys}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value'], 'number'],
            [['name'], 'string', 'max' => 200],
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
            'value' => 'Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookkeys()
    {
        return $this->hasMany(Bookkeys::className(), ['tagId' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \backend\queries\TagKeysQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\queries\TagKeysQuery(get_called_class());
    }
}
