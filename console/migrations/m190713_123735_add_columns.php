<?php

use yii\db\Migration;

/**
 * Class m190713_123735_add_columns
 */
class m190713_123735_add_columns extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user_info', 'first_name', $this->string());
        $this->addColumn('user_info', 'middle_name', $this->string());
        $this->addColumn('user_info', 'last_name', $this->string());

        $this->update('user_info', ['first_name' => 'Vladimir', 'middle_name' => 'Yrievich', 'last_name' => 'Afonin'], ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

    }
}
