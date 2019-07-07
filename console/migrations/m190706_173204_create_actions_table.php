<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%actions}}`.
 */
class m190706_173204_create_actions_table extends Migration
{
    const TABLE = '{{%action}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'rating' => $this->tinyInteger(),
            'target' => $this->string(),
            'type' => $this->string(),
            'duration' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->createIndex('idx-action-user_id', self::TABLE, 'user_id');
        $this->addForeignKey(
            'fk-action-user-id',
            self::TABLE,
            'user_id',
            '{{%user}}',
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
