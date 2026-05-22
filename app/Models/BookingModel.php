<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'booking_id';

    protected $allowedFields = ['user_id', 'kamar_id', 'status'];

    protected $useTimestamps = true;
}