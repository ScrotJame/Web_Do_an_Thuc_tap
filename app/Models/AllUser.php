<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllUser extends Model
{
    protected $table = "nhanvien"; // Đặt tên bảng
    protected $fillable = ['id_nhanvien','hoten', 'id_phongban', 'id_chucvu', 'email', 'sodienthoai', 'diachi', 'id_quyenhan', 'avatar'];
    
    use HasFactory;

    // Định nghĩa mối quan hệ 'ChucVu'
    public function chucvu()
    {
        return $this->belongsTo(ChucVu::class, 'id_chucvu', 'id_chucvu'); 
    }

   
    public function phongban()
    {
        return $this->belongsTo(PhongBan::class, 'id_phongban','id_phongban'); 
    }
    public function luong()
    {
        return $this->hasOne(SalaryCaculation::class, 'id_nhanvien', 'id_nhanvien');
    }
}
