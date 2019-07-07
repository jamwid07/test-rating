<?php

use yii\db\Migration;

/**
 * Class m190707_201705_create_rating_counts_view
 */
class m190707_201705_create_rating_counts_view extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createIndex('idx-action-rating', '{{%action}}', 'rating');
        $sql = <<<SQL
CREATE VIEW rating_count AS (
    SELECT a.user_id,
	   coalesce(count(CASE WHEN rating = "1" THEN rating END), 0) AS R1,
	   coalesce(count(CASE WHEN rating = "2" THEN rating END), 0) AS R2,
	   coalesce(count(CASE WHEN rating = "3" THEN rating END), 0) AS R3,
	   coalesce(count(CASE WHEN rating = "4" THEN rating END), 0) AS R4,
	   coalesce(count(CASE WHEN rating = "5" THEN rating END), 0) AS R5,
	   coalesce(count(CASE WHEN rating = "6" THEN rating END), 0) AS R6,
	   coalesce(count(CASE WHEN rating = "7" THEN rating END), 0) AS R7,
	   coalesce(count(CASE WHEN rating = "8" THEN rating END), 0) AS R8,
	   coalesce(count(CASE WHEN rating = "9" THEN rating END), 0) AS R9,
	   coalesce(count(CASE WHEN rating = "10" THEN rating END), 0) AS R10
    FROM action a
    GROUP BY a.user_id
)
SQL;
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->db->createCommand("DROP VIEW rating_count")->execute();
        $this->dropIndex('idx-action-rating', '{{%action}}');
    }
}
