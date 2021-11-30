<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    

    protected $table='tenants';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';

}
