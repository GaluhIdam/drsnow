<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Category extends Model
{
    protected $table = "tb_kategoriproduk";
    protected $primaryKey = 'id_kategori';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_kategori', 'nama_kategori', 'icon', 'created_at'];

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
        $builder = $db->table('tb_kategoriproduk'); // Produces: SELECT * FROM mytable
        $query   = $builder->orderBy('created_at', 'DESC');
        $query = $builder->get();

        return $query->getResult('array');
    }

    public function Getdata($id_kategori)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_kategoriproduk');
        $query = $builder->getWhere(['id_kategori' => $id_kategori]);

        return $query->getResult('array');
    }

    public function countCategory()
    {
        $db      = \Config\Database::connect();
        $query = $db->query('SELECT * FROM tb_kategoriproduk');

        return $query->getNumRows();
    }
}
