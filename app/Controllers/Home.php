<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Home extends BaseController
{
    protected $komikModel;
    protected $helpers = ['form'];
    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Home | AppStarter',
            'komik' => $this->komikModel->getKomik()
        ];
        return view('Home/home', $data);
    }
}
