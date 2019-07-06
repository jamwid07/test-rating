<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%statuses}}`.
 */
class m190706_172623_create_statuses_table extends Migration
{
    const TABLE = '{{%status}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'can_send_msg' => $this->tinyInteger(),
            'can_publish' => $this->tinyInteger(),
            'can_read' => $this->tinyInteger(),
        ]);

        $this->createIndex('idx-user-status_id', '{{%user}}', 'status_id');
        $this->addForeignKey(
            'fk-user-status_id-status',
            '{{%user}}',
            'status_id',
            self::TABLE,
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(self::TABLE);
    }
}
