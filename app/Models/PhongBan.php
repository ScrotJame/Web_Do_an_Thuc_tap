<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongBan extends Model
{
    protected $table = 'phongban'; 
    protected $fillable = ['tenphongban']; 

    public function nhanviens()
    {
        return $this->hasMany(AllUser::class, 'id_phongban',); // Mối quan hệ ngược lại
    }
}
