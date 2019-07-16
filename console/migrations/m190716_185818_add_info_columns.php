<?php

use yii\db\Migration;

/**
 * Class m190716_185818_add_info_columns
 */
class m190716_185818_add_info_columns extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user_info', 'first_name_info', $this->string());
        $this->addColumn('user_info', 'nickname_name_info', $this->string());
        $this->addColumn('user_info', 'local_user_id_info', $this->string());
        $this->addColumn('user_info', 'date_of_birth_info', $this->string());
        $this->addColumn('user_info', 'aboutme_info', $this->string());
        $this->addColumn('user_info', 'relation_info', $this->string());
        $this->addColumn('user_info', 'keywords_info', $this->string());

        $this->update('user_info',
        [
            'first_name_info' => 'You can display your names differently to different users.',
            'nickname_name_info' => 'Nick Name will be used in different communications. ',
            'local_user_id_info' => 'Unique User ID for each on MyLokal ',
            'date_of_birth_info' => 'Providing your date of birth helps make sure you get the right MyLokal experience for your age. If you want to change who sees this, you can make changes from your profile. For more details, please visit our data policy',
            'aboutme_info' => 'Your brief Introduction to MyLokal Community',
            'relation_info' => 'Your relationship status ',
            'keywords_info' => 'Your key words to identify / search the account',
        ],
        ['id' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190716_185818_add_info_columns cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190716_185818_add_info_columns cannot be reverted.\n";

        return false;
    }
    */
}
