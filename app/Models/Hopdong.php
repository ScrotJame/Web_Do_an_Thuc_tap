<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hopdong extends Model
{
    use HasFactory;
    protected $table='hinhthuchopdong';
    protected $fillable = ['tenhinhthuc', 'description'];
}
