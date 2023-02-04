<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Account extends Seeder
{
    public function run()
    {
        $news_data = [
			[
				'username' => 'admin',
				'name'  => 'Admin',
                'role'  => 'admin',
				'password' => password_hash('admin-123', PASSWORD_DEFAULT)
			],
			[
				'username' => 'author',
				'name'  => 'Author Admin',
                'role'  => 'author',
				'password' => password_hash('author-123', PASSWORD_DEFAULT)
			],
			 
		];

		foreach($news_data as $data){
			// insert semua data ke tabel
			$this->db->table('account')->insert($data);
		}
    }
}
