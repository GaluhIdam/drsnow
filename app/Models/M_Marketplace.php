<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Marketplace extends Model
{
    protected $table = "tb_marketplace";
    protected $primaryKey = 'id_marketplace';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_marketplace', 'nama_marketplace', 'link_marketplace', 'image_marketplace', 'created_at'];

    public function getMarketplace($id_marketplace = false)
    {
        if ($id_marketplace === false) {
            return $this->findAll();
        }
        return $this->where(['id_marketplace' => $id_marketplace])->first();
    }

    public function getByID()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_marketplace'); // Produces: SELECT * FROM mytable
        $query   = $builder->orderBy('nama_marketplace', 'ASC');
        $query = $builder->get();

        return $query->getResult('array');
    }

    public function searchMarketplace($keyword)
    {
        return $this->table('tb_marketplace')->like('nama_marketplace', $keyword);
    }

    public function countMarketplace()
    {
        $db      = \Config\Database::connect();
        $query = $db->query('SELECT * FROM tb_marketplace');

        return $query->getNumRows();
    }
}
