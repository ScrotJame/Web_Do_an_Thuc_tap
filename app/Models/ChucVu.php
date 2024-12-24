<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChucVu extends Model
{
    protected $table = 'chucvu'; // Đặt tên bảng nếu cần
    protected $fillable = ['tenchucvu']; // Ví dụ với trường 'ten_chucvu'

    public function nhanviens()
    {
        return $this->hasMany(AllUser::class, 'id_chucvu',); // Mối quan hệ ngược lại
    }
}
