<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trangthai extends Model
{
    use HasFactory;
    protected $table = 'trangthai'; // Tên bảng
    protected $fillable = [
        'id_trangthai',
        'tentrangthai',
    ];
    public function trangthais(){
        return $this->hasMany(SalaryCaculation::class, 'id_trangthai');
    }
}
