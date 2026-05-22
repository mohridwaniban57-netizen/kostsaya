<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'pembayaran_id';
    
    protected $allowedFields = ['booking_id', 'user_id', 'bukti', 'status'];

    protected $useTimestamps = true;
}