<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'account';
	protected $primaryKey           = 'username';  
	protected $returnType           = 'object';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		"username",
		"name",
		"role",
        "password"
	];
 
	 

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = ["beforeInsert"];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	protected function beforeInsert(array $data)
	{
		$data = $this->passwordHash($data);
		return $data;
	}

	protected function passwordHash(array $data)
	{
		if (isset($data['data']['password'])) {
			$data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
		}

		return $data;
	}

	
    public function getData($id = false)
    {
        $data = [];
        if($id === false){
            $data = $this->table($this->table)
                        ->orderBy($this->table.'.id', 'desc')
                        ->get()
                        ->getResult();
        } else {
            $data = $this->table($this->table)
                        ->where($this->table.'.id', $id)
                        ->orderBy($this->table.'.id', 'desc')
                        ->get()
                        ->getRow();
        }
        
        return $data;
    }

    public function getDataAndWhere($andWhere)
    {
        $data = [];
        $data = $this->table($this->table)
                        ->where(' 1=1 '.$andWhere)
                        ->get()
                        ->getResult();        
        return $data;
    }

   
}