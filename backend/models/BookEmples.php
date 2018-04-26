<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bookEmples".
 *
 * @property int $id
 * @property int $bookId
 * @property int $empId
 * @property string $gettingDate
 *
 * @property Employes $emp
 * @property Books $book
 */
class BookEmples extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bookEmples';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bookId', 'empId', 'gettingDate'], 'required'],
            [['bookId', 'empId'], 'integer'],
            [['gettingDate'], 'safe'],
            [['empId'], 'exist', 'skipOnError' => true, 'targetClass' => Employes::className(), 'targetAttribute' => ['empId' => 'id']],
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
            'bookId' => 'Book ID',
            'empId' => 'Emp ID',
            'gettingDate' => 'Getting Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmp()
    {
        return $this->hasOne(Employes::className(), ['id' => 'empId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Books::className(), ['id' => 'bookId']);
    }
}
