<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProfileModel extends Model
{
    use HasFactory;
    protected $table = 'profile';
    protected $primarykey = 'id';
}
