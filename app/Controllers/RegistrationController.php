<?php

namespace App\Controllers;

use App\Models\RegistrationModel;
use CodeIgniter\Controller;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrationModel = new RegistrationModel();
        $data['registrations'] = $registrationModel->getAllRegistrations();

        return view('contact_list', $data); // Menampilkan halaman daftar kontak (contact_list.php)
    }

    public function create()
    {
        return view('contact_form'); // Menampilkan form untuk menambahkan kontak baru (contact_form.php)
    }

    public function store()
    {
        $registrationModel = new RegistrationModel();


        // Simpan data ke database
        $data = [
            'name' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('phone'),
            'service' => $this->request->getPost('service'),
            'address' => $this->request->getPost('address'),
            'message' => $this->request->getPost('message')
        ];

        $registrationModel->addRegistration($data);

        return redirect()->to('/registrations'); // Redirect ke halaman daftar kontak setelah penyimpanan berhasil
    }

    public function edit($id)
    {
        $registrationModel = new RegistrationModel();
        $data['contact'] = $registrationModel->getRegistrationById($id);

        return view('contact_edit_form', $data); // Menampilkan form untuk mengedit kontak (contact_edit_form.php)
    }

    public function update($id)
    {
        $registrationModel = new RegistrationModel();

        // Update data kontak
        $data = [
            'name' => $this->request->getPost('name'),
            'phone' => $this->request->getPost('phone'),
            'service' => $this->request->getPost('service'),
            'address' => $this->request->getPost('address'),
            'message' => $this->request->getPost('message')
        ];

        $registrationModel->updateRegistration($id, $data);

        return redirect()->to('/registrations'); // Redirect ke halaman daftar kontak setelah update berhasil
    }

    public function delete($id)
    {
        $registrationModel = new RegistrationModel();
        $registrationModel->deleteRegistration($id);

        return redirect()->to('/registrations'); // Redirect ke halaman daftar kontak setelah penghapusan berhasil
    }
}

