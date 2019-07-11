<?php

use yii\db\Migration;

/**
 * Class m190711_055254_create_users_rows
 */
class m190711_055254_create_users_rows extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $peoples = [
            [
                'user_id' => 1,
                'nick_name' => 'Vladimir',
                'user_login' => 'vladimir_afonin',
                'date_birth' => 602726400,
                'about_me' => 'i am love programming and so on, and i want to work hard and some words',
                'relation_status' => 'married',
                'keywords' => 'some keywords here'
            ],
        ];

        foreach ($peoples as $people) {
            //$marker['type'] = $markerTypeHash[  ];
            $this->insert('user_info', [
                'user_id' => $people['user_id'],
                'nick_name' => $people['nick_name'],
                'user_login' => $people['user_login'],
                'date_birth' => $people['date_birth'],
                'about_me' => $people['about_me'],
                'relation_status' => $people['relation_status'],
                'keywords' => $people['keywords'],
                'created_at' => time(),
                'updated_at' => time(),
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190711_055254_create_users_rows cannot be reverted.\n";
        return false;
    }

}
