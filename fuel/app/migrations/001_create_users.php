<?php

namespace Fuel\Migrations;

class Create_users
{
	public function up()
	{
		\DBUtil::create_table('users', array(
			'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
			'name' => array('type' => 'varchar', 'constraint' => 50),
			'email' => array('type' => 'varchar', 'constraint' => 255),
			'phone' => array('type' => 'varchar', 'constraint' => 10),
			'address' => array('type' => 'varchar', 'constraint' => 255), 
			'avatar' => array('type' => 'varchar', 'constraint' => 255), 
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('users');
	}
}