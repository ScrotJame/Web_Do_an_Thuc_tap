<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryCaculation extends Model
{
    use HasFactory;
    protected $table = 'luong'; // Tên bảng
    protected $fillable = [
        'id_luong',
        'id_nhanvien',
        'luongcoban',        
        'thangtinhluong',
        'phucap',
        'thuong',
        'khautru',
        'luongnhan',
        'id_trangthai',
    ];
    public function nhanvien()
    {
        return $this->belongsTo(AllUser::class, 'id_nhanvien', 'id_nhanvien');
    }
}
