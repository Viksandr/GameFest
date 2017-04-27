<?php

use yii\db\Migration;

class m170427_142422_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'login' => $this->string(25)->notNull()->unique(),
            'email' => $this->string(100)->notNull()->unique(),
            'password' => $this->string(64)->notNull(),
            'created' => $this->dateTime()->notNull(),
            'updated' => $this->dateTime()->notNull()
        ]);
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
