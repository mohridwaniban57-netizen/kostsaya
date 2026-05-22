<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{
    protected $table = 'kamar';
    protected $primaryKey = 'kamar_id';

    protected $allowedFields = ['kos_id', 'nomor', 'harga', 'status'];

    protected $useTimestamps = true;
}