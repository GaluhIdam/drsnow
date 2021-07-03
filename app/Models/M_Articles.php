<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Articles extends Model
{
    protected $table = "tb_artikel";
    protected $primaryKey = 'id_artikel';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_artikel', 'slug_artikel', 'judul_artikel', 'nama_kategori', 'meta_tag', 'image_artikel', 'isi_artikel', 'penulis_artikel', 'created_at', 'status'];

    public function getArtikel($slug_artikel = false)
    {
        if ($slug_artikel === false) {
            return $this->findAll();
        }

        return $this->where(['slug_artikel' => $slug_artikel])->first();
    }

    public function getByID()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_artikel'); // Produces: SELECT * FROM mytable
        $query   = $builder->orderBy('judul_artikel', 'ASC');
        $query = $builder->get();

        return $query->getResult('array');
    }

    public function getByDate()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_artikel'); // Produces: SELECT * FROM mytable
        $query   = $builder->orderBy('id_artikel', 'DESC');
        $query = $builder->get();

        return $query->getResult('array');
    }
}
