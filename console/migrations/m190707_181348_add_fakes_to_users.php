<?php

use yii\db\Migration;

/**
 * Class m190707_181348_add_fakes_to_users
 */
class m190707_181348_add_fakes_to_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $faker = \Faker\Factory::create('ru_RU');
        for ($i = 0; $i < 20; $i++) {
            $user = new \frontend\models\SignupForm([
                'username' => $faker->userName,
                'phone' => $faker->phoneNumber,
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'email' => $faker->email,
                'password' => $faker->password
            ]);
            if ($user->signup()) {
                echo 'User '.$user->username.' registered. Password: '.$user->password.PHP_EOL;
            } else {
                var_dump($user->getErrors());
                return false;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->truncateTable('{{%user}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190707_181348_add_fakes_to_users cannot be reverted.\n";

        return false;
    }
    */
}
