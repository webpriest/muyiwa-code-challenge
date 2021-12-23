<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('serial_number');
            $table->text('description')->nullable();
            $table->enum('mode', ['Fixed', 'Movable'])->default('Fixed');
            $table->string('picture_path')->nullable();
            $table->date('purchase_date')->nullable();
            $table->date('start_use_date')->nullable();
            $table->decimal('purchase_price', 12, 2)->nullable();
            $table->date('warranty_expiry_date')->nullable();
            $table->year('degradation')->nullable();
            $table->decimal('currency_value', 12, 2)->nullable();
            $table->string('location')->nullable();
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
        Schema::dropIfExists('assets');
    }
}
