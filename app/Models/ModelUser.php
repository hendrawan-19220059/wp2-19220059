<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama', 'email', 'image', 'password', 'role_id', 'is_active', 'tanggal_input'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'tanggal_update';


    public function getUser($id_user = false){
        // Jika tidak memiliki paramatere maka query seluruh data
        if($id_user == false){
            return $this->findAll();
        }
        // Jika ada parameter yang ditambahkan maka tampilkan data pertama
        return $this->where(['id' => $id_user])->first();
    }
}