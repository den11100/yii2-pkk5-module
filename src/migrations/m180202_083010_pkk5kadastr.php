<?php

use yii\db\Migration;

class m180202_083010_pkk5kadastr extends Migration
{

    public function safeUp()
    {
		$tableOptions = null;
		//Опции для mysql
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

		//Создание таблицы IP пользователей
		$this->createTable('{{%pkk5kadastr}}', [
			'id' => $this->primaryKey(),
			'kadastrnumber' => $this->string(64)->notNull(),
			'address' => $this->string(255),
			'cost' => $this->string(64),
			'area' => $this->string(64),
		], $tableOptions);

    }

    public function safeDown()
    {
			$this->dropTable('{{%pkk5kadastr}}');
    }
}
