<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "special".
 *
 * @property integer $Id
 * @property string $svalue
 * @property integer $spost
 */
class Special extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'special';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['spost'], 'integer'],
            [['svalue'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'svalue' => 'Svalue',
            'spost' => 'Spost',
        ];
    }
}
