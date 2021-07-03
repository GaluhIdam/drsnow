<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Product extends Model
{
    protected $table = "tb_produk";
    protected $primaryKey = 'id_produk';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_produk', 'slug_produk', 'nama_kategori', 'gambar_produk', 'type', 'nama_produk', 'desc_produk', 'harga_produk', 'created_at'];


    public function getProduk($id_produk = false)
    {
        if ($id_produk === false) {
            return $this->findAll();
        }
        return $this->where(['id_produk' => $id_produk])->first();
    }

    public function getByID()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_produk'); // Produces: SELECT * FROM mytable
        $builder->orderBy('nama_produk', 'ASC');
        $query = $builder->get();

        return $query->getResult('array');
    }

    public function countProduct()
    {
        $db      = \Config\Database::connect();
        $query = $db->query('SELECT * FROM tb_produk');

        return $query->getNumRows();
    }

    public function getProCat()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_produk');
        $builder->select('*');
        $builder->join('tb_kategori', 'tb_kategori.nama_kategori = tb_produk.nama_kategori');
        $query = $builder->get();
        return $query->getResult('array');
    }

    public function getDetail($produk)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_produk');
        $builder->join('tb_kategori', 'tb_kategori.nama_kategori = tb_produk.nama_kategori');
        $builder->where(['slug_produk' => $produk]);
        $query = $builder->get();
        return $query->getResult('array');
    }

    public function searchProduct($keyword)
    {
        return $this->table('tb_produk')->like('nama_produk', $keyword)->orLike('nama_kategori', $keyword);
    }
}
