<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Contact extends Model
{
    protected $table = "tb_kontak";
    protected $primaryKey = 'id_kontak';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_kontak', 'username', 'subjek', 'email', 'pesan', 'date'];

    public function getContact($id_kontak = false)
    {
        if ($id_kontak === false) {
            return $this->findAll();
        }
        return $this->where(['id_kontak' => $id_kontak])->first();
    }

    public function getByID()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_kontak'); // Produces: SELECT * FROM mytable
        $query   = $builder->orderBy('id_kontak', 'DESC');
        $query = $builder->get();

        return $query->getResult('array');
    }
}
