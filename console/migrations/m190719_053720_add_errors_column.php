<?php

use yii\db\Migration;

/**
 * Class m190719_053720_add_errors_column
 */
class m190719_053720_add_errors_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user_info', 'first_name_error', $this->string());
        $this->addColumn('user_info', 'middle_name_error', $this->string());
        $this->addColumn('user_info', 'last_name_error', $this->string());
        $this->addColumn('user_info', 'nick_name_error', $this->string());
        $this->addColumn('user_info', 'birth_incorrect_error', $this->string());
        $this->addColumn('user_info', 'birth_young_error', $this->string());
        $this->addColumn('user_info', 'aboutme_error', $this->string());

        $this->update('user_info',
        [
            'first_name_error' => 'First Name cannot be left blank',
            'middle_name_error' => 'Middle Name cannot be left blank',
            'last_name_error' => 'Last Name cannot be left blank',
            'nick_name_error' => 'Nick Name cannot be left blank',
            'birth_incorrect_error' => 'Please choose the complete date as a your birthday',
            'birth_young_error' => 'We are in process of developing this platform for younger people like you but are not ready currently. We regret inconvenience.',
            'aboutme_error' => 'Aboutme cannot be left blank',
        ],
        ['id' => 1]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190719_053720_add_errors_column cannot be reverted.\n";

        return false;
    }
}
