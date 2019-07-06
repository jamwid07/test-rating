<?php

namespace common\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "status".
 *
 * @property int $id
 * @property string $name
 * @property int $can_send_msg
 * @property int $can_publish
 * @property int $can_read
 *
 * @property User[] $users
 */
class Status extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['can_send_msg', 'can_publish', 'can_read'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'can_send_msg' => 'Can Send Msg',
            'can_publish' => 'Can Publish',
            'can_read' => 'Can Read',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::class, ['status_id' => 'id']);
    }
}
