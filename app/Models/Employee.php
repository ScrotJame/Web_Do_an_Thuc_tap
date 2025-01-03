<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'full_name',
        'dob',
        'gender',
        'department_id',
        'contract_type_id',
        'position_id',
        'start_date',
        'email',
        'phone',
        'address',
        'avatar'
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function contractType()
    {
        return $this->belongsTo(ContractType::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
