<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Account extends Migration
{
    public function up()
    {
        $this->forge->addField([ 
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '45',
                'null'           => false,
			],
			'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 250,
				'null'           => false,
			],
			'name' => [
				'type'           => 'VARCHAR',
                'constraint'     => 45,
				'null'           => false,
			],
			'role' => [
				'type'           => 'VARCHAR',
                'constraint'     => 45,
				'null'           => false,
			],
		]);

		 
		$this->forge->addKey('username', TRUE);

		 
		$this->forge->createTable('account', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('account');
    }
}
