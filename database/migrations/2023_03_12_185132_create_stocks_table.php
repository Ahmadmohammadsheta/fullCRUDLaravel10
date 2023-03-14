<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->bigInteger('stock');
            // $table->boolean('available')->nullable()->default(1);
            // $table->boolean('approved')->default(0);
            // $table->string('stock_code')->unique();
            // $table->bigInteger('over_price')->nullable();
            // $table->bigInteger('starting_stock')->nullable();
            // $table->bigInteger('min_quantity')->nullable();
            // $table->bigInteger('barcode')->nullable();
            // $table->bigInteger('spare_barcode')->nullable();
            // $table->unsignedBigInteger('color_id')->nullable();
            // $table->unsignedBigInteger('size_id')->nullable();
            // $table->unsignedBigInteger('volume_id')->nullable();
            // $table->unsignedBigInteger('season_id')->nullable();
            // $table->date('manufacture_date')->nullable();
            // $table->date('expire_date')->nullable();
            // $table->decimal('stock_discount', 4, 2)->nullable()->default(0);
            // $table->date('discount_start_date')->nullable();
            // $table->date('discount_end_date')->nullable();
            // $table->unsignedBigInteger('created_by')->nullable();
            // $table->unsignedBigInteger('updated_by')->nullable();
            // $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
