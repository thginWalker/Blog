<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "headline".
 *
 * @property integer $Id
 * @property integer $hhead
 * @property string $hvalue
 * @property string $kvalue
 */
class Headline extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'headline';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hhead'], 'integer'],
            [['hvalue'], 'string', 'max' => 255],
            [['kvalue'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'hhead' => 'Hhead',
            'hvalue' => 'Hvalue',
            'kvalue' => 'Kvalue',
        ];
    }
}
