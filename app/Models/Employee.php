<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "nhanvien";
    protected $fillable = [
        'id_nhanvien',
        'hoten',
        'ngaysinh',
        'gioitinh',
        'id_phongban',
        'id_hinhthuchopdong',
        'id_chucvu',
        'ngayvaolam',
        'email',
        'sodienthoai',
        'diachi',
        'avatar'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'id_phongban','id_phongban');
    }

    public function contractType()
    {
        return $this->belongsTo(ContractType::class,'id_hinhthuchopdong','id_hinhthuchopdong');
    }

    public function position()
    {
        return $this->belongsTo(Position::class,'id_chucvu','id_chucvu');
    }
}
