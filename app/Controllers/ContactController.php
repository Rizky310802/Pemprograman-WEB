<?php

namespace App\Controllers;

use App\Models\RegistrationModel;
use CodeIgniter\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $registrationModel = new RegistrationModel();
        $data['registrations'] = $registrationModel->findAll();
        
        return view('contact_list', $data); // Menampilkan view contact_list.php dengan data registrasi
    }
}
