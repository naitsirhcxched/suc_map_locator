<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suc extends Model
{
    use HasFactory;

    // Specify the custom table name
    protected $table = 'suc_tbl';  

    protected $guarded = ['id'];
}
