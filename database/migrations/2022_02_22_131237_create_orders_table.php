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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->float('grand_total')->default("0.0");
            $table->enum('payment_method',['cash','mpesa','visa'])->default('cash');
            $table->enum('status',['pending','processing','completed','decline'])->default('pending');
            $table->string('phone_number');
            $table->longtext('location');
            $table->time('datePaid', $precision = 0)->nullable();
            $table->boolean('is_Returned')->default(false);
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
