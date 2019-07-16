<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "widgets".
 *
 * @property int $id
 * @property string $widget_name
 * @property int $status
 */
class Widgets extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'widgets';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['widget_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'widget_name' => 'Widget Name',
            'status' => 'Status',
        ];
    }
}
