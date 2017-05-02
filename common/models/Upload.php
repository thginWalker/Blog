<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "upload".
 *
 * @property integer $Id
 * @property string $title
 * @property string $content
 * @property string $url
 * @property integer $type
 * @property string $time
 * @property integer $duserid
 */
class Upload extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'upload';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['type', 'duserid'], 'integer'],
            [['title', 'url'], 'string', 'max' => 128],
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
            'title' => 'Title',
            'content' => 'Content',
            'url' => 'Url',
            'type' => 'Type',
            'time' => 'Time',
            'duserid' => 'Duserid',
        ];
    }
}
