<?php

namespace App\Controllers;

use App\Models\M_Product;
use App\Models\M_Category;
use App\Models\M_Marketplace;
use App\Models\M_Profile;

class Product extends BaseController
{
    public function __construct()
    {
        $this->M_Product = new M_Product();
        $this->M_Category = new M_Category();
        $this->M_Marketplace = new M_Marketplace();
        $this->M_Profile = new M_Profile();
    }

    public function index()
    {
        session();
        $data = [
            'title' => 'Product',
            'id_produk' => $this->M_Product->getByID(),
            'id_marketplace' => $this->M_Marketplace->getMarketplace(),
            'id_profile' => $this->M_Profile->getProfile(),
            'validation' => \Config\Services::validation()
        ];
        return view('Page/product', $data);
    }
}
