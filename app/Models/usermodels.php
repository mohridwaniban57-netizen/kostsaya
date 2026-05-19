<?php

namespace App\Model;

use Codeigniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primarykey = 'user_id';

    protected $allowedFileds = ['nama', 'email', 'password', 'role', 'foto'];

    protected $useTimestamps = true;
}
