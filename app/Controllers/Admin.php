<?php

namespace App\Controllers;

use App\Models\M_Profile;
use App\Models\M_Ringkasan;
use App\Models\M_Contact;
use App\Models\M_Product;
use App\Models\M_Category;
use App\Models\M_Marketplace;
use App\Models\M_Articles;
use App\Models\M_CategoryArticles;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->M_Profile = new M_Profile();
        $this->M_Ringkasan = new M_Ringkasan();
        $this->M_Contact = new M_Contact();
        $this->M_Product = new M_Product();
        $this->M_Category = new M_Category();
        $this->M_Marketplace = new M_Marketplace();
        $this->M_Articles = new M_Articles();
        $this->M_CategoryArticles = new M_CategoryArticles();
    }


    //DASHBOARD
    public function Index()
    {
        $data = [
            'title'           => 'Dashboard',
            'exam'            => 'Dashboard',
            'id_produk'       => $this->M_Product->countProduct(),
            'id_kategori'     => $this->M_Category->countCategory(),
            'id_marketplace'  => $this->M_Marketplace->countMarketplace(),
        ];
        // dd($data['id_produk']);
        return view('cmslist/listdashboard', $data);
    }


    // PROFILE
    public function Profile()
    {
        $data = [
            'title' => 'Profil',
            'exam' => 'Informasi',
            'id_web'  => $this->M_Profile->getProfile(),
            'validation' => \Config\Services::validation()
        ];
        return view('cmslist/listprofile', $data);
    }
    public function editProfile($id_web)
    {
        $data = [
            'title' => 'Profil',
            'exam' => 'Informasi',
            'validation' => \Config\Services::validation(),
            'id_web' => $this->M_Profile->getProfile($id_web)
        ];

        if (empty($data['id_web'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Profil' . $id_web . 'tidak ditemukan.');
        }

        return view('cmsedit/editprofile', $data);
    }
    public function updateProfile($id_web)
    {
        if (!$this->validate([
            'nama_brand' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'Kolom nama brand harus terisi',
                    'max_length' => 'Masukan maksimal 50 digit',
                ]
            ],
            'alamat' => [
                'rules' => 'required|min_length[5]|max_length[100]',
                'errors' => [
                    'required' => 'Kolom alamat harus terisi',
                    'min_length' => 'Masukan minimal 5 digit',
                    'max_length' => 'Masukan maksimal 100 digit',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Kolom isi email harus terisi',
                    'valid_email' => 'Email yang dimasukan tidak valid',
                ]
            ],
            'notelp' => [
                'rules' => 'required|max_length[12]|numeric',
                'errors' => [
                    'required' => 'Kolom nomor telpon harus terisi',
                    'max_length' => 'Masukan maksimal 12 karakter',
                    'numeric' => 'Masukan karakter numeric'
                ]
            ],
            'website' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Website wajib dipilih',
                ]
            ],
            'facebook' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Facebook wajib dipilih',
                ]
            ],
            'instagram' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Instagram wajib dipilih',
                ]
            ],
            'twitter' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Twitter wajib dipilih',
                ]
            ],


        ])) {

            return redirect()->to('/Admin/editProfile/' . $this->request->getPost('id_web'))->withInput();
        }

        //take a image
        $filelogo_brand = $this->request->getFile('logo_brand');
        //cek file
        if ($filelogo_brand->getError() == 4) {
            $namalogo_brand = $this->request->getPost('gambarLama');
        } else {
            //generate nama file random
            $namalogo_brand = $filelogo_brand->getName();
            //pindahkan gambar
            $filelogo_brand->move('assets/img/', $namalogo_brand);
            // hapus file lama
            unlink('assets/img/' . $this->request->getPost('gambarLama'));
        }

        $this->M_Profile->save([
            'id_web' => $id_web,
            'nama_brand' => $this->request->getPost('nama_brand'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'notelp' => $this->request->getPost('notelp'),
            'website' => $this->request->getPost('website'),
            'whatsapp' => $this->request->getPost('whatsapp'),
            'facebook' => $this->request->getPost('facebook'),
            'instagram' => $this->request->getPost('instagram'),
            'twitter' => $this->request->getPost('twitter'),
            'update_at' => $this->request->getPost('update_at'),
            'logo_brand'  => $namalogo_brand
        ]);

        session()->setFlashdata('update', 'Data Profil Berhasil Diupdate !');
        return redirect()->to('/Admin/Profile');
    }


    // RINGKASAN
    public function Ringkasan()
    {
        $data = [
            'title' => 'Profil',
            'exam' => 'Ringkasan',
            'id_ringkasan'  => $this->M_Ringkasan->getRingkasan(),
            'validation' => \Config\Services::validation()
        ];
        return view('cmslist/listringkasan', $data);
    }
    public function editRingkasan($id_ringkasan)
    {
        $data = [
            'title' => 'Profil',
            'exam' => 'Ringkasan',
            'validation' => \Config\Services::validation(),
            'id_ringkasan' => $this->M_Ringkasan->getRingkasan($id_ringkasan),
        ];

        if (empty($data['id_ringkasan'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Ringkasan' . $id_ringkasan . 'tidak ditemukan.');
        }

        return view('cmsedit/editringkasan', $data);
    }
    public function updateRingkasan($id_ringkasan)
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'Kolom judul bran harus terisi',
                    'max_length' => 'Masukan maksimal 50 digit',
                ]
            ],
            'isi' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => 'Kolom isi harus terisi',
                    'min_length' => 'Masukan minimal 5 digit',
                ]
            ],

        ])) {

            return redirect()->to('/Admin/editRingkasan/' . $this->request->getPost('id_ringkasan'))->withInput();
        }

        // dd($this->request->getPost());

        //take a image
        $fileimg_ringkasan = $this->request->getFile('img_ringkasan');
        //cek file
        if ($fileimg_ringkasan->getError() == 4) {
            $namaimg_ringkasan = $this->request->getPost('gambarLama');
        } else {
            //generate nama file random
            $namaimg_ringkasan = $fileimg_ringkasan->getName();
            //pindahkan gambar
            $fileimg_ringkasan->move('assets/img', $namaimg_ringkasan);
            // hapus file lama
            unlink('assets/img/' . $this->request->getPost('gambarLama'));
        }

        $this->M_Ringkasan->save([
            'id_ringkasan' => $id_ringkasan,
            'judul' => $this->request->getPost('judul'),
            'isi'  => $this->request->getPost('isi'),
            'date'  => $this->request->getPost('date'),
            'img_ringkasan'  => $namaimg_ringkasan,
        ]);

        session()->setFlashdata('update', 'Data Ringkasan Berhasil Diupdate !');
        return redirect()->to('/Admin/Ringkasan');
    }


    // CONTACT
    public function Contact()
    {
        $data = [
            'title' => 'Kotak Masuk',
            'exam' => 'Kotak Masuk',
            'id_kontak'  => $this->M_Contact->getByID()
        ];
        return view('cmslist/listcontact', $data);
    }

    public function deleteContact($id_kontak)
    {
        $model = new M_Contact();
        $data['date'] = $model->where('date', $id_kontak)->delete();
        session()->setFlashdata('delete', 'Data Kotak Masuk Berhasil Dihapus !');
        return redirect()->to('/Admin/Contact');
    }

    public function viewContact($id_kontak)
    {
        $data = [
            'title' => 'Kotak Masuk',
            'exam' => 'Kotak Masuk',
            'validation' => \Config\Services::validation(),
            'id_kontak' => $this->M_Contact->getContact($id_kontak),
        ];

        if (empty($data['id_kontak'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Kotak Masuk' . $id_kontak . 'tidak ditemukan.');
        }

        return view('cmsview/viewkotakmasuk', $data);
    }


    // PRODUCT
    public function Product()
    {
        $data = [
            'title' => 'Produk',
            'exam' => 'Daftar Produk',
            'id_produk' => $this->M_Product->getByID(),
        ];

        return view('cmslist/listproduct', $data);
    }

    public function createProduct()
    {
        $data = [
            'title' => 'Produk',
            'exam' => 'Daftar Produk',
            'validation' => \Config\Services::validation(),
            'id_kategori' => $this->M_Category->getCategory()
        ];

        echo view('cmscreate/createproduct', $data);
    }
    public function saveProduct()
    {
        if (!$this->validate([
            'nama_produk' => [
                'rules' => 'required|is_unique[tb_produk.nama_produk]',
                'errors' => [
                    'required' => 'nama produk harus terisi',
                    'is_unique' => 'nama produk sudah terdaftar'
                ]
            ],
            'desc_produk' => [
                'rules' => 'required|min_length[5]|max_length[500]',
                'errors' => [
                    'required' => 'deskirpsi produk harus terisi',
                    'min_length' => 'deskirpsi produk minimal 5 digit',
                    'max_length' => 'deskirpsi produk maksimal 500 digit',
                ]
            ],
            'harga_produk' => [
                'rules' =>    'required|numeric',
                'errors' => [
                    'required' => 'harga produk harus terisi',
                    'numeric' => 'harga produk harus karakter numeric',
                ]
            ],
            'nama_kategori' => [
                'rules' =>    'required',
                'errors' => [
                    'required' => 'kategori produk harus terisi',
                ]
            ],
            'gambar_produk' => [
                'rules' => 'uploaded[gambar_produk]|max_size[gambar_produk,1024]|is_image[gambar_produk]|mime_in[gambar_produk,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'gambar produk harus terisi',
                    'max_size' => 'gambar produk maksimal 1 mb',
                    'is_image' => 'file yg diupload bukan gambar',
                    'mime_in' => 'file yg diupload bukan gambar'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Admin/createProduct')->withInput();
        }

        //take a image
        $fileGambarProduk = $this->request->getFile('gambar_produk');
        //move file
        $fileGambarProduk->move('assets/img/produk');
        //take a name
        $namaGambarProduk = $fileGambarProduk->getName();

        $slug_produk = url_title($this->request->getPost('nama_produk'), '-', true);
        $this->M_Product->save([
            'nama_produk'    => $this->request->getPost('nama_produk'),
            'slug_produk'    => $slug_produk,
            'nama_kategori'    => $this->request->getPost('nama_kategori'),
            'desc_produk'    => $this->request->getPost('desc_produk'),
            'type'           => $this->request->getPost('type'),
            'harga_produk'   => $this->request->getPost('harga_produk'),
            'gambar_produk'  => $namaGambarProduk,
        ]);

        // dd($this->request->getPost());

        session()->setFlashdata('tambah', 'Data Produk Berhasil Ditambahkan!');
        return redirect()->to('/Admin/Product');
    }

    public function editProduct($id_produk)
    {
        $data = [
            'title' => 'Produk',
            'exam' => 'Daftar Produk',
            'validation' => \Config\Services::validation(),
            'id_produk' => $this->M_Product->getProduk($id_produk),
            'id_kategori' => $this->M_Category->getCategory()
        ];
        return view('cmsedit/editproduct', $data);
    }

    public function updateProduct($id_produk)
    {
        if (!$this->validate([
            'nama_produk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama produk harus terisi',
                ]
            ],
            'nama_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'kategori produk harus terisi',
                ]
            ],
            'harga_produk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'harga produk harus terisi',
                ]
            ],
            'desc_produk' => [
                'rules' => 'required|min_length[5]|max_length[500]',
                'errors' => [
                    'required' => 'deskirpsi produk harus terisi',
                    'min_length' => 'deskirpsi produk minimal 5 digit',
                    'max_length' => 'deskirpsi produk maksimal 500 digit',
                ]
            ],
            'gambar_produk' => [
                'rules' => 'max_size[gambar_produk,1024]|is_image[gambar_produk]|mime_in[gambar_produk,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'gambar produk maksimal 1 mb',
                    'is_image' => 'file yg diupload bukan gambar',
                    'mime_in' => 'file yg diupload bukan gambar'
                ]
            ]

        ])) {
            return redirect()->to('/Admin/editProduct/' . $this->request->getPost('slug_produk'))->withInput();
        }

        //take a image
        $fileGambarProduk = $this->request->getFile('gambar_produk');
        //cek file
        if ($fileGambarProduk->getError() == 4) {
            $namaGambarProduk = $this->request->getPost('gambarLama');
        } else {
            //generate nama file random
            $namaGambarProduk = $fileGambarProduk->getName();
            //pindahkan gambar
            $fileGambarProduk->move('assets/img/produk', $namaGambarProduk);
            // hapus file lama
            unlink('assets/img/produk/' . $this->request->getPost('gambarLama'));
        }

        $slug_produk = url_title($this->request->getPost('nama_produk'), '-', true);
        $this->M_Product->save([
            'id_produk'      => $id_produk,
            'nama_produk'    => $this->request->getPost('nama_produk'),
            'slug_produk'    => $slug_produk,
            'nama_kategori'   => $this->request->getPost('nama_kategori'),
            'harga_produk'   => $this->request->getPost('harga_produk'),
            'desc_produk'    => $this->request->getPost('desc_produk'),
            'type'           => $this->request->getPost('type'),
            'gambar_produk'  => $namaGambarProduk
        ]);
        session()->setFlashdata('update', 'Data produk berhasil Diupdate!');
        return redirect()->to('/Admin/Product');
    }

    public function deleteProduct($id_produk)
    {
        $nama_produk = $this->M_Product->find($id_produk);

        if ($nama_produk['gambar_produk'] != 'default.png') {
            unlink('assets/img/produk/' . $nama_produk['gambar_produk']);
        }

        $this->M_Product->delete($id_produk);
        session()->setFlashdata('delete', 'Data produk berhasil dihapus !');
        return redirect()->to('/Admin/Product');
    }


    // CATEGORY
    public function Category()
    {
        $data = [
            'title' => 'Produk',
            'exam' => 'Kategori',
            'id_kategori'  => $this->M_Category->getByID(),
            'validation' => \Config\Services::validation()
        ];

        return view('cmslist/listcategory', $data);
    }

    public function createCategory()
    {
        $data = [
            'title' => 'Produk',
            'exam' => 'Kategori',
            'created_at'  => $this->M_Category->getCategory(),
            'validation' => \Config\Services::validation()
        ];

        echo view('cmscreate/createcategory', $data);
    }

    public function deleteCategory($id_kategori)
    {
        $namagambar = $this->M_Category->find($id_kategori);

        if ($namagambar['icon'] != 'default.png') {
            unlink('assets/img/icon/' . $namagambar['icon']);
        }

        $this->M_Category->delete($id_kategori);
        session()->setFlashdata('delete', 'Data Kategori Berhasil Dihapus !');
        return redirect()->to('/Admin/Category');
    }

    public function saveCategory()
    {
        if (!$this->validate([
            'nama_kategori' => [
                'rules' => 'required|is_unique[tb_kategoriproduk.nama_kategori]',
                'errors' => [
                    'required' => 'nama kategori harus terisi',
                    'is_unique' => 'nama kategori sudah terdaftar'
                ]
            ],
            'icon' => [
                'rules' => 'uploaded[icon]|max_size[icon,1024]|is_image[icon]|mime_in[icon,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'icon harus terisi',
                    'max_size' => 'icon maksimal 1 mb',
                    'is_image' => 'file yg diupload bukan gambar',
                    'mime_in' => 'file yg diupload bukan gambar'
                ]
            ]

        ])) {
            return redirect()->to('/Admin/createCategory')->withInput();
        }

        //take a image
        $fileicon = $this->request->getFile('icon');
        //move file
        $fileicon->move('assets/img/icon');
        //take a name
        $namaicon = $fileicon->getName();

        $this->M_Category->save([
            'nama_kategori'    => $this->request->getPost('nama_kategori'),
            'icon'             => $namaicon,
        ]);

        // dd($this->request->getPost());

        session()->setFlashdata('tambah', 'Data Kategori Berhasil Ditambahkan!');
        return redirect()->to('/Admin/Category');
    }

    public function editCategory($id_kategori)
    {
        $data = [
            'title' => 'Produk',
            'exam' => 'Kategori',
            'validation' => \Config\Services::validation(),
            'id_kategori' => $this->M_Category->getCategory($id_kategori),
        ];


        if (empty($data['id_kategori'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk' . $id_kategori . 'tidak ditemukan.');
        }

        return view('cmsedit/editcategory', $data);
    }

    public function updateCategory($id_kategori)
    {
        if (!$this->validate([
            'nama_kategori' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'kategori harus terisi',
                    'max_length' => 'Masukan maksimal 50 karakter',
                ]
            ],
            'icon' => [
                'rules' => 'max_size[icon,1024]|is_image[icon]|mime_in[icon,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'gambar icon maksimal 1 mb',
                    'is_image' => 'file yg diupload bukan gambar',
                    'mime_in' => 'file yg diupload bukan gambar'
                ]
            ]

        ])) {
            // dd($this->request->getPost());
            return redirect()->to('/Admin/editCategory/' . $this->request->getPost('id_kategori'))->withInput();
        }

        $fileicon = $this->request->getFile('icon');
        //cek file
        if ($fileicon->getError() == 4) {
            $namaicon = $this->request->getPost('gambarLama');
        } else {
            //generate nama file random
            $namaicon = $fileicon->getName();
            //pindahkan gambar
            $fileicon->move('assets/img/icon', $namaicon);
            // hapus file lama
            unlink('assets/img/icon/' . $this->request->getPost('gambarLama'));
        }

        $this->M_Category->save([
            'id_kategori' => $id_kategori,
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'icon' => $namaicon,
        ]);

        session()->setFlashdata('update', 'Data Kategori Berhasil Diupdate !');
        return redirect()->to('/Admin/Category');
    }


    // MARKETPLACE
    public function Marketplace()
    {
        $data = [
            'title' => 'Produk',
            'exam'  => 'Marketplace',
            'id_marketplace' => $this->M_Marketplace->getByID(),
            'validation' => \Config\Services::validation()
        ];

        return view('cmslist/listmarketplace', $data);
    }

    public function createMarketplace()
    {
        $data = [
            'title' => 'Produk',
            'exam'  => 'Marketplace',
            'validation' => \Config\Services::validation()
        ];

        return view('cmscreate/createmarketplace', $data);
    }

    public function saveMarketplace()
    {
        if (!$this->validate([
            'image_marketplace' => [
                'rules' => 'uploaded[image_marketplace]|max_size[image_marketplace,1024]|is_image[image_marketplace]|mime_in[image_marketplace,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'gambar marketplace harus terisi',
                    'max_size' => 'gambar marketplace maksimal 1 mb',
                    'is_image' => 'file yg diupload bukan gambar',
                    'mime_in' => 'file yg diupload bukan gambar'
                ]
            ],
            'nama_marketplace' => [
                'rules' => 'required|is_unique[tb_marketplace.nama_marketplace]',
                'errors' => [
                    'required' => 'nama marketplace harus terisi',
                    'is_unique' => 'nama marketplace sudah terdaftar'
                ]
            ],
            'link_marketplace' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama marketplace harus terisi'
                ]
            ],

        ])) {
            return redirect()->to('/Admin/createMarketplace')->withInput();
        }

        //take a image
        $fileimage_marketplace = $this->request->getFile('image_marketplace');
        //move file
        $fileimage_marketplace->move('assets/img/marketplace');
        //take a name
        $namaimage_marketplace = $fileimage_marketplace->getName();

        $this->M_Marketplace->save([
            'nama_marketplace'    => $this->request->getPost('nama_marketplace'),
            'link_marketplace'    => $this->request->getPost('link_marketplace'),
            'image_marketplace'    => $namaimage_marketplace
        ]);

        // dd($this->request->getPost());

        session()->setFlashdata('tambah', 'Data Marketplace Berhasil Ditambahkan!');
        return redirect()->to('/Admin/Marketplace');
    }

    public function deleteMarketplace($id_marketplace)
    {
        $namagambar = $this->M_Marketplace->find($id_marketplace);

        if ($namagambar['image_marketplace'] != 'default.png') {
            unlink('assets/img/marketplace/' . $namagambar['image_marketplace']);
        }

        $this->M_Marketplace->delete($id_marketplace);
        session()->setFlashdata('delete', 'Data Marketplace Berhasil Dihapus !');
        return redirect()->to('/Admin/Marketplace');
    }

    public function editMarketplace($id_marketplace)
    {
        $data = [
            'title' => 'Produk',
            'exam' => 'Marketplace',
            'validation' => \Config\Services::validation(),
            'id_marketplace' => $this->M_Marketplace->getMarketplace($id_marketplace),
        ];

        if (empty($data['id_marketplace'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Marketplace' . $id_marketplace . 'tidak ditemukan.');
        }

        return view('cmsedit/editmarketplace', $data);
    }

    public function updateMarketplace($id_marketplace)
    {
        if (!$this->validate([
            'image_marketplace' => [
                'rules' => 'max_size[image_marketplace,1024]|is_image[image_marketplace]|mime_in[image_marketplace,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'gambar marketplace maksimal 1 mb',
                    'is_image' => 'file yg diupload bukan gambar',
                    'mime_in' => 'file yg diupload bukan gambar'
                ]
            ],
            'nama_marketplace' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama marketplace harus terisi',
                    'is_unique' => 'nama marketplace sudah terdaftar'
                ]
            ],
            'link_marketplace' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama marketplace harus terisi'
                ]
            ]

        ])) {

            return redirect()->to('/Admin/editMarketplace/' . $this->request->getPost('id_marketplace'))->withInput();
        }
        //take a image
        $fileimage_marketplace = $this->request->getFile('image_marketplace');
        //cek file
        if ($fileimage_marketplace->getError() == 4) {
            $namaimage_marketplace = $this->request->getPost('gambarLama');
        } else {
            //generate nama file random
            $namaimage_marketplace = $fileimage_marketplace->getName();
            //pindahkan gambar
            $fileimage_marketplace->move('assets/img/marketplace', $namaimage_marketplace);
            // hapus file lama
            unlink('assets/img/marketplace/' . $this->request->getPost('gambarLama'));
        }

        $this->M_Marketplace->save([
            'id_marketplace'    => $id_marketplace,
            'nama_marketplace'    => $this->request->getPost('nama_marketplace'),
            'link_marketplace'    => $this->request->getPost('link_marketplace'),
            'image_marketplace'    => $namaimage_marketplace
        ]);

        session()->setFlashdata('update', 'Data Marketplace Berhasil Diupdate!');
        return redirect()->to('/Admin/Marketplace');
    }


    // ARTICLES
    public function Articles()
    {
        $data = [
            'title' => 'Artikel',
            'exam' => 'Daftar Artikel',
            'id_articles' => $this->M_Articles->getByID()
        ];

        // dd($data['id_articles']);
        return view('cmslist/listarticles', $data);
    }

    public function createArticles()
    {
        $data = [
            'title' => 'Artikel',
            'exam' => 'Daftar Artikel',
            'nama_kategori' => $this->M_CategoryArticles->getByID(),
            'validation' => \Config\Services::validation()
        ];
        return view('cmscreate/createarticles', $data);
    }

    public function saveArticles()
    {
        if (!$this->validate([
            'judul_artikel' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Kolom artikel harus terisi'
                ]
            ],
            'nama_kategori' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom artikel harus terisi'
                ]
            ],
            'meta_tag' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Kolom meta tag harus terisi',
                    'max_length' => 'Masukan maksimal 100 digit'
                ]
            ],
            'isi_artikel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom isi artikel harus terisi'
                ]
            ],
            'penulis_artikel' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'Kolom penulis harus terisi',
                    'max_length' => 'Masukan maksimal 50 karakter'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Status artikel wajib dipilih'
                ]
            ],
            'image_artikel' => [
                'rules' => 'uploaded[image_artikel]|max_size[image_artikel,1024]|is_image[image_artikel]|mime_in[image_artikel,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'gambar produk harus terisi',
                    'max_size' => 'gambar produk maksimal 1 mb',
                    'is_image' => 'file yg diupload bukan gambar',
                    'mime_in' => 'file yg diupload bukan gambar'
                ]
            ],

        ])) {

            // dd($this->request->getPost());
            // $validation = \Config\Services::validation();
            return redirect()->to('/Admin/createArticles')->withInput();
        }
        // dd($this->request->getPost());
        //take a image
        $fileImageArtikel = $this->request->getFile('image_artikel');
        //take a name
        $namaImageArtikel = $fileImageArtikel->getName();
        //move file
        $fileImageArtikel->move('assets/img/artikel');

        $slug_artikel = url_title($this->request->getVar('judul_artikel'), '-', true);
        $this->M_Articles->save([
            'slug_artikel' => $slug_artikel,
            'judul_artikel' => $this->request->getVar('judul_artikel'),
            'nama_kategori' => $this->request->getVar('nama_kategori'),
            'meta_tag'  => $this->request->getVar('meta_tag'),
            'image_artikel'  => $namaImageArtikel,
            'isi_artikel'  => $this->request->getVar('isi_artikel'),
            'penulis_artikel'  => $this->request->getVar('penulis_artikel'),
            'created_at'  => $this->request->getVar('created_at'),
            'status'  => $this->request->getVar('status')
        ]);

        session()->setFlashdata('tambah', 'Data Artikel Berhasil Ditambahkan!');
        return redirect()->to('/Admin/Articles');
    }

    public function deleteArticles($id_articles)
    {
        $nama_artikel = $this->M_Articles->find($id_articles);

        if ($nama_artikel['image_artikel'] != 'default.jpg') {
            unlink('assets/img/artikel/' . $nama_artikel['image_artikel']);
        }

        $this->M_Articles->delete($id_articles);
        session()->setFlashdata('delete', 'Data Artikel Berhasil Dihapus !');
        return redirect()->to('/Admin/Articles');
    }


    //CATEGORY ARTICLES
    public function CategoryArticles()
    {
        $data = [
            'title' => 'Artikel',
            'exam' => 'Kategori Artikel',
            'nama_kategori' => $this->M_CategoryArticles->getByID()
        ];

        return view('cmslist/listcategoryarticles', $data);
    }

    public function createCategoryArticles()
    {

        $data = [
            'title' => 'Artikel',
            'exam' => 'Kategori Artikel',
            'validation' => \Config\Services::validation()
        ];

        return view('cmscreate/createcategoryarticles', $data);
    }

    public function saveCategoryArticles()
    {
        if (!$this->validate([
            'nama_kategori' => [
                'rules' => 'required|is_unique[tb_kategoriartikel.nama_kategori]',
                'errors' => [
                    'required' => 'nama kategori harus terisi',
                    'is_unique' => 'nama kategori sudah terdaftar'
                ]
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/Admin/createCategoryArticles')->withInput()->with('validation', $validation);
        }

        $this->M_CategoryArticles->save([
            'nama_kategori'    => $this->request->getPost('nama_kategori'),
        ]);

        session()->setFlashdata('tambah', 'Data Kategori Berhasil Ditambahkan!');
        return redirect()->to('/Admin/CategoryArticles');
    }

    public function deleteCategoryArticles($id_kategori)
    {
        $data['id_kategori'] = $this->M_CategoryArticles->where('id_kategori', $id_kategori)->delete();
        session()->setFlashdata('delete', 'Data Kategori Berhasil Dihapus !');
        return redirect()->to('/Admin/CategoryArticles');
    }
}
