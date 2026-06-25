<?php

namespace App\Models;

use CodeIgniter\Model;

class KosModel extends Model
{
    protected $table            = 'kos';
    protected $primaryKey       = 'kos_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $useSoftDeletes   = true;
    protected $allowedFields = [
        'pemilik_id',
        'nama_kos',
        'lokasi',
        'harga',
        'foto',
        'status',
        'tipekost',
        'alasan',
        'deskripsi',
        'fasilitas',
    ];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}