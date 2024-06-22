<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrationModel extends Model
{
    protected $table = 'registrations'; // Nama tabel di database
    protected $primaryKey = 'id'; // Primary key dari tabel
    protected $allowedFields = ['name', 'phone', 'service', 'address', 'message']; // Kolom yang diizinkan untuk operasi mass assignment

    // Optional: Jika ingin menggunakan timestamps (created_at dan updated_at)
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Optional: Jika ingin mengaktifkan validasi model, Anda bisa tambahkan method berikut
    protected $validationRules = [
        'name' => 'required',
        'phone' => 'required',
        'service' => 'required',
        'address' => 'required',
        // Tambahkan aturan validasi sesuai kebutuhan
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Nama lengkap harus diisi.'
        ],
        'phone' => [
            'required' => 'Nomor telepon harus diisi.'
        ],
        'service' => [
            'required' => 'Jenis layanan Telkomsel harus dipilih.'
        ],
        'address' => [
            'required' => 'Alamat harus diisi.'
        ],
        // Tambahkan pesan validasi sesuai kebutuhan
    ];

    protected $skipValidation = false; // Ubah menjadi true jika tidak ingin menggunakan validasi

    // Metode untuk menambahkan data baru
    public function addRegistration($data)
    {
        return $this->insert($data);
    }

    // Metode untuk mengambil semua data registrasi
    public function getAllRegistrations()
    {
        return $this->findAll();
    }

    // Metode untuk mengambil data registrasi berdasarkan ID
    public function getRegistrationById($id)
    {
        return $this->find($id);
    }

    // Metode untuk mengupdate data registrasi berdasarkan ID
    public function updateRegistration($id, $data)
    {
        return $this->update($id, $data);
    }

    // Metode untuk menghapus data registrasi berdasarkan ID
    public function deleteRegistration($id)
    {
        return $this->delete($id);
    }
}
