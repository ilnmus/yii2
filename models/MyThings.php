<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MyThings".
 *
 * @property integer $id
 * @property string $name
 * @property string $value
 * @property integer $count
 */
class MyThings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'MyThings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'value', 'count'], 'required'],
            [['count'], 'integer'],
            [['name', 'value'], 'string', 'max' => 500],
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
            'count' => 'Count',
        ];
    }
}
