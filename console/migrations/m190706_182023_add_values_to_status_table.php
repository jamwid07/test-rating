<?php

use yii\db\Migration;

/**
 * Class m190706_182023_add_values_to_status_table
 */
class m190706_182023_add_values_to_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%status}}', ['name', 'can_send_msg', 'can_publish', 'can_read'],
            [
                ['Подал заявку', 0, 0, 0],
                ['Зарегистрирован', 0, 0, 1],
                ['Подтверждён', 1, 0, 1],
                ['Одобрен', 1, 1, 1],
                ['Особый', 1, 1, 1],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('{{%status}}');
    }
}
