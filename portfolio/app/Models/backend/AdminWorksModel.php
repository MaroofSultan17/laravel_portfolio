<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminWorksModel extends Model
{
    use HasFactory;
    protected $table = 'works';
    protected $primaryKey = 'workid';
}
