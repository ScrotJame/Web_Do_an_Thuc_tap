<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractTypesTable extends Migration
{
    public function up()
    {
        Schema::create('contract_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->comment('Tên hình thức hợp đồng');
            $table->text('description')->nullable()->comment('Mô tả hình thức hợp đồng');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contract_types');
    }
}
