
<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_employees_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->id();
            $table->string('id_nhanvien')->unique();
            $table->string('hoten');
            $table->date('ngaysinh');
            $table->enum('gioitinh', ['nam', 'nu']);
            $table->unsignedBigInteger('id_phongban');
            $table->unsignedBigInteger('id_hiinhthuchopdong');
            $table->unsignedBigInteger('id__chucvu');
            $table->date('ngayvaolam');
            $table->string('email');
            $table->string('sodienthoai');
            $table->text('diachi');
            $table->string('avatar')->nullable();
            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('contract_type_id')->references('id')->on('contract_types');
            $table->foreign('position_id')->references('id')->on('positions');
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}

