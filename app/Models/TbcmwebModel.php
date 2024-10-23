<?php

namespace App\Models;

use CodeIgniter\Model;

class TbcmwebModel extends Model
{
    protected $table = 'tbcmweb';  // The name of your database table
    protected $primaryKey = 'id';  // Primary key
    protected $allowedFields = ['section', 'content_en', 'content_ta'];  // Allowed fields
}
