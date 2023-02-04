<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
    public function up()
    {
        
		$this->forge->addField([
			'idpost'          => [
				'type'           => 'INT',
				'unsigned'       => true,
				'auto_increment' => true,
                'null'           => false,
			],
			'title'       => [
				'type'           => 'TEXT',
				'null'           => false,
			],
			'content' => [
				'type'           => 'TEXT',
				'null'           => false,
			],
			'date'      => [
				'type'           => 'DATETIME',
                'null'           => false,
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '45',
                'null'           => false,
			],
		]);

		 
		$this->forge->addKey('idpost', TRUE);
        $this->forge->createTable('post', TRUE);

    }

    public function down()
    {
        $this->forge->dropTable('post');
    }
}

