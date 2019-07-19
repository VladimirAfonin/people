<?php

use yii\db\Migration;

/**
 * Class m190719_055612_add
 */
class m190719_055612_add extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user_info', 'aboutme_charact_error', $this->string());

        $this->update('user_info',
            [
                'aboutme_charact_error' => 'Maximum 200 symbols are allowed',
            ],
            ['id' => 1]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190719_055612_add cannot be reverted.\n";

        return false;
    }

}
