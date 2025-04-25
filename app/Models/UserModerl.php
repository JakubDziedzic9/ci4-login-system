<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = ['email', 'password_hash', 'first_name', 'created_at', 'updated_at'];
    protected $useTimestamps = true;
}
