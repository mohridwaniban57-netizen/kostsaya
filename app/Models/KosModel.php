<?php

namespace App\Models;

use CodeIgniter\Model;

class KosModel extends Model
{
    protected $table = 'kos';
    protected $primaryKey = 'kos_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $protectFields= true;
    protected $allowedFields = [
    'pemilik_id',
    'nama_kos',
    'lokasi',
    'harga',
    'foto'
    ];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    
}
