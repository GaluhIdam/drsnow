<?php

namespace App\Controllers;

use App\Models\M_Ringkasan;
use App\Models\M_Profile;

class About extends BaseController
{
    public function __construct()
    {
        $this->M_Ringkasan = new M_Ringkasan();
        $this->M_Profile = new M_Profile();
    }

    public function index()
    {
        session();
        $data = [
            'title' => 'About',
            'id_profile' => $this->M_Profile->getProfile(),
            'id_ringkasan' => $this->M_Ringkasan->getRingkasan(),
            'validation' => \Config\Services::validation()
        ];
        return view('Page/about', $data);
    }
}
