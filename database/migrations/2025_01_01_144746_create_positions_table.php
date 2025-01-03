<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Tên chức vụ
            $table->text('description')->nullable();  // Mô tả chức vụ
            $table->timestamps();  // Thời gian tạo và cập nhật
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('positions');
    }
    
};
