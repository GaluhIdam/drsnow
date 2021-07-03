<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Ringkasan extends Model
{
    protected $table = "tb_ringkasan";
    protected $primaryKey = 'id_ringkasan';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_ringkasan', 'judul', 'img_ringkasan', 'isi', 'date'];

    public function getRingkasan($id_ringkasan = false)
    {
        if ($id_ringkasan === false) {
            return $this->findAll();
        }
        return $this->where(['id_ringkasan' => $id_ringkasan])->first();
    }

    public function updatePesan($data, $slug_nama)
    {
        return $this->db->table($this->table)->update($data, ['slug_nama' => $slug_nama]);
    }
}
