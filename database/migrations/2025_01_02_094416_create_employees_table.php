
<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_employees_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->unique();
            $table->string('full_name');
            $table->date('dob');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('contract_type_id');
            $table->unsignedBigInteger('position_id');
            $table->date('start_date');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
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

