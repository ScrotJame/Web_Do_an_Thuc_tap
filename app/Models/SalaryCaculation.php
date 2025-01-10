<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryCaculation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'luong'; // Tên bảng
    protected $primaryKey = 'id_luong';
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
    public function getLuongNhanDuocAttribute()
    {
        return $this->luongcoban + $this->phucap + $this->thuong - $this->khautru;
    }
    public function nhanvien()
    {
        return $this->belongsTo(AllUser::class, 'id_nhanvien', 'id_nhanvien');
    }
    public function _trangthai()
    {
        return $this->belongsTo(Trangthai::class,'id_trangthai', 'id_trangthai');
    }
}
