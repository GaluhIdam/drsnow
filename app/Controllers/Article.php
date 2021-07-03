<?php

namespace App\Controllers;

use App\Models\M_Articles;
use App\Models\M_CategoryArticles;
use App\Models\M_Profile;

class Article extends BaseController
{
    public function __construct()
    {
        $this->M_Articles = new M_Articles();
        $this->M_CategoryArticles = new M_CategoryArticles();
        $this->M_Profile = new M_Profile();
    }

    public function index()
    {
        $data = [
            'title' => 'Article',
            'id_profile' => $this->M_Profile->getProfile(),
            'nama_kategori' => $this->M_CategoryArticles->getByID(),
            'id_artikel' => $this->M_Articles->getByDate(),
        ];

        return view('Page/articles', $data);
    }

    public function viewArticles($slug_artikel)
    {
        $data = [
            'title' => 'Article',
            'id_profile' => $this->M_Profile->getProfile(),
            'nama_kategori' => $this->M_CategoryArticles->getByID(),
            'slug_artikel' => $this->M_Articles->getArtikel($slug_artikel)
        ];
        return view('Page/viewarticles', $data);
    }
}
