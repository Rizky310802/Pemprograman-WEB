<?php

namespace App\Controllers;

use App\Models\RegistrationModel;

class Contact extends BaseController
{
    public function index()
    {
        return view('contact_form');
    }

    public function submit()
    {
        // Validasi input menggunakan CodeIgniter's Validator
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required',
            'phone' => 'required',
            'service' => 'required',
            'address' => 'required'
        ]);
        
        // Ambil data dari request
        $data = [
            'name' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('phone'),
            'service' => $this->request->getPost('service'),
            'address' => $this->request->getPost('address'),
            'message' => $this->request->getPost('message'),
        ];

        // Jika validasi gagal, kembali ke halaman form dengan pesan error
        if (!$validation->withRequest($this->request)->run()) {
            return view('contact_form', [
                'validation' => $validation
            ]);
        }

        // Simpan data ke database menggunakan model
        $model = new RegistrationModel();
        $model->save($data);

        // Tampilkan halaman dengan hasil submit
        return view('contact_result', $data);
    }
}
