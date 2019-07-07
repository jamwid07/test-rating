<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "rating_count".
 *
 * @property int $user_id
 * @property int $R1
 * @property int $R2
 * @property int $R3
 * @property int $R4
 * @property int $R5
 * @property int $R6
 * @property int $R7
 * @property int $R8
 * @property int $R9
 * @property int $R10
 *
 * @property User $user
 */
class RatingCount extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rating_count';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'R1', 'R2', 'R3', 'R4', 'R5', 'R6', 'R7', 'R8', 'R9', 'R10'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'R1' => 'R1',
            'R2' => 'R2',
            'R3' => 'R3',
            'R4' => 'R4',
            'R5' => 'R5',
            'R6' => 'R6',
            'R7' => 'R7',
            'R8' => 'R8',
            'R9' => 'R9',
            'R10' => 'R10',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
