<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    protected $fillable = ['users_id', 'users_name', 'productos_id'];
    

}
