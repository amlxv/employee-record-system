<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('ic')->nullable();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->string('department')->nullable();
            $table->string('retiring_num')->nullable();
            $table->string('retiring_date')->nullable();
            $table->string('retiring_type')->nullable();
            $table->text('address')->nullable();
            $table->string('phone_num')->nullable();
            $table->json('wife')->nullable();
            $table->json('child')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}