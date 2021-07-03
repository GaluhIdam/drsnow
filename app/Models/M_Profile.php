<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Profile extends Model
{
    protected $table = "tb_webprofile";
    protected $primaryKey = 'id_web';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_web', 'logo_brand', 'nama_brand', 'email', 'notelp', 'whatsapp', 'facebook', 'instagram', 'twitter', 'update_at'];

    public function getProfile($id_web = false)
    {
        if ($id_web === false) {
            return $this->findAll();
        }
        return $this->where(['id_web' => $id_web])->first();
    }

    public function updatePesan($data, $slug_nama)
    {
        return $this->db->table($this->table)->update($data, ['slug_nama' => $slug_nama]);
    }
}
