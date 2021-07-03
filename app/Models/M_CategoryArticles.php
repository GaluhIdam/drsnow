<?php

namespace App\Models;

use CodeIgniter\Model;

class M_CategoryArticles extends Model
{
    protected $table = "tb_kategoriartikel";
    protected $primaryKey = 'id_kategori';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_kategori', 'nama_kategori', 'created_at'];

    public function getCategory($id_kategori = false)
    {
        if ($id_kategori === false) {
            return $this->findAll();
        }
        return $this->where(['id_kategori' => $id_kategori])->first();
    }

    public function getByID()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_kategoriartikel'); // Produces: SELECT * FROM mytable
        $query   = $builder->orderBy('nama_kategori', 'ASC');
        $query = $builder->get();

        return $query->getResult('array');
    }
}
