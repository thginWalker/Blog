<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "download".
 *
 * @property integer $Id
 * @property string $url
 * @property integer $type
 * @property integer $number
 * @property string $time
 * @property integer $duserid
 */
class Download extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'download';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'number', 'duserid'], 'integer'],
            [['url'], 'string', 'max' => 128],
            [['time'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'url' => 'Url',
            'type' => 'Type',
            'number' => 'Number',
            'time' => 'Time',
            'duserid' => 'Duserid',
        ];
    }
}
