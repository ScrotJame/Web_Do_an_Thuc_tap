<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongBan extends Model
{
    protected $table = 'phongban'; // Đặt tên bảng nếu cần
    protected $fillable = ['tenphongban']; // Ví dụ với trường 'ten_chucvu'

    public function nhanviens()
    {
        return $this->hasMany(AllUser::class, 'id_phongban',); // Mối quan hệ ngược lại
    }
}
