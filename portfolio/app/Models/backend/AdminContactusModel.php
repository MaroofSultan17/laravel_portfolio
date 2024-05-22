<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminContactusModel extends Model
{
    use HasFactory;
    protected $table = "contact_us";
    protected $primarykey = "id";
}
