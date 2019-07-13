<?php

namespace frontend\models;

use common\models\User;
use Yii;

/**
 * This is the model class for table "user_info".
 *
 * @property int $id
 * @property int $user_id
 * @property string $nick_name
 * @property string $user_login
 * @property int $date_birth
 * @property string $about_me
 * @property string $relation_status
 * @property string $keywords
 * @property int $created_at
 * @property int $updated_at
 * @property string $last_name
 * @property string $middle_name
 * @property string $first_name
 *
 * @property User $user
 */
class UserInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'date_birth', 'created_at', 'updated_at'], 'integer'],
            [['about_me'], 'string'],
            [['nick_name', 'user_login', 'relation_status', 'keywords'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'nick_name' => 'Nick Name',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'middle_name' => 'Middle Name',
            'user_login' => 'User Login',
            'date_birth' => 'Date Birth',
            'about_me' => 'About Me',
            'relation_status' => 'Relation Status',
            'keywords' => 'Keywords',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
