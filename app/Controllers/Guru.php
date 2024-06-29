<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Guru extends BaseController
{   
    protected $guruModel;

    public function __construct()
    {
        $this->guruModel = new \App\Models\Guru();
    }
    public function index()
    { 
        $data = [
            'title' => 'Data Guru',
            'dataGuru' => $this->guruModel->findAll(),
        ];
        return view('guru/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data',
        ];
        return view('guru/create', $data);
    }

    public function store()
    {   
        if(!$this->validate([
            'nama' => 'required',
            'nip' => 'required',
            'alamat' => 'required',
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/dataguru/create')->withInput()->with('validation', $validation);
        }
        $this->guruModel->save([
            'nama' => $this->request->getVar('nama'),
            'nip' => $this->request->getVar('nip'),
            'alamat' => $this->request->getVar('alamat'),
        ]);
        session()->setFlashdata('success', 'Data guru berhasil ditambahkan');
        return redirect()->to('/dashboard/dataguru');
    }


}
