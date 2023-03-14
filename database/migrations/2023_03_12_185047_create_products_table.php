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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->unsignedBigInteger('category_id');
            $table->decimal('sale_price', 16, 2);
            // $table->decimal('buy_price', 16, 2)          ->nullable();
            // $table->decimal('buy_discount', 4, 2)        ->nullable();
            // $table->unsignedBigInteger('item_unit_id')   ->nullable();
            // $table->integer('unit_parts_count')          ->nullable();
            // $table->boolean('available')                 ->default(1);
            // $table->boolean('approved')                  ->default(0);
            // $table->boolean('flash_sales')               ->default(0);
            // $table->boolean('extra_piece')               ->default(0);
            // $table->boolean('last_week')                 ->default(0);
            // $table->date('last_week_start')             ->nullable();
            // $table->text('key_words');
            // $table->string('item_code')                  ->nullable();
            // $table->decimal('discount', 4, 2)            ->default(0);
            // $table->text('description');
            // $table->unsignedBigInteger('manufactory_id') ->nullable();
            // $table->unsignedBigInteger('agent_id')       ->nullable();
            // $table->unsignedBigInteger('company_id')     ->nullable();
            // $table->unsignedBigInteger('importer_id')    ->nullable();
            $table->unsignedBigInteger('created_by')     ->nullable();
            $table->unsignedBigInteger('updated_by')     ->nullable();
            // $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
