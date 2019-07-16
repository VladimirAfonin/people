<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%widgets}}`.
 */
class m190716_183246_create_widgets_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%widgets}}', [
            'id' => $this->primaryKey(),
            'widget_name' => $this->string(),
            'status' => $this->tinyInteger(),
        ]);

        $widgets = [
            [
                'widget_name' => 'user_info',
                'status' => 1,
            ],
        ];

        foreach ($widgets as $widget) {
            //$marker['type'] = $markerTypeHash[  ];
            $this->insert('widgets', [
                'widget_name' => $widget['widget_name'],
                'status' => $widget['status'],
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%widgets}}');
    }
}
