<?php

namespace App\Controllers;

use App\Models\M_Contact;
use App\Models\M_Profile;

class Contact extends BaseController
{
    public function __construct()
    {
        $this->M_Contact = new M_Contact();
        $this->M_Profile = new M_Profile();
    }

    public function index()
    {
        session();
        $data = [
            'title' => 'Contact',
            'id_profile' => $this->M_Profile->getProfile(),
            'validation' => \Config\Services::validation()
        ];
        return view('Page/contact', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'Username harus terisi',
                    'max_length' => 'Username maksimal 50 digit',
                ]
            ],
            'subjek' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'Subjek harus terisi',
                    'max_length' => 'Subjek maksimal 50 digit',
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email harus terisi',
                    'is_unique' => 'Email sudah terdaftar'
                ]
            ],
            'pesan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pesan harus terisi',
                ]
            ],

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Contact')->withInput();
        }

        $this->M_Contact->save([
            'id_kontak' => $this->request->getPost('id_kontak'),
            'username' => $this->request->getPost('username'),
            'subjek' => $this->request->getPost('subjek'),
            'email' => $this->request->getPost('email'),
            'pesan' => $this->request->getPost('pesan'),
        ]);
        session()->setFlashdata('tambah', 'Pesan Berhasil Dikirim !');
        return redirect()->to('/Contact');
    }
}
