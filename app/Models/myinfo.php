<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myinfo extends Model
{
    use HasFactory;
    protected $table='owner_info';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
}
