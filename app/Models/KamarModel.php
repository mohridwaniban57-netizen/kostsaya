<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{
       protected $table = 'kamar';
    protected $primaryKey = 'kamar_id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = true;
    protected $protectFields= true;
    protected $allowedFields = [
        'nomor',
        'harga',
        'status'
    ];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    
}