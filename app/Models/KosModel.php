<?php

namespace App\Models;

use CodeIgniter\Model;

class KosModel extends Model
{
    protected $table = 'kos';
    protected $primaryKey = 'kos_id';

    protected $allowedFields = ['nama_kos', 'pemilik_id', 'lokasi', 'harga', 'foto'];

    protected $useTimestamps = true;
}