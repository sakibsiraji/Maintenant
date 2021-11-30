<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flatModel extends Model
{
    use HasFactory;
    protected $table = 'flats';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
}
