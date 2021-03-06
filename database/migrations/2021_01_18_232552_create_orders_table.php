<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
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
            $table->foreignId('customer_id')->constrained()->cascadeOnDelete();
            $table->foreignId('tailor_id')->nullable()->constrained();
            $table->foreignId('gallery_id')->nullable()->constrained();
            $table->longText('description')->nullable();
            $table->json('measurement')->nullable();
            $table->json('attachment')->nullable();
            $table->enum('with_material', ['no', 'yes'])->nullable();
            $table->unsignedDecimal('price', 19, 2)->nullable();
            $table->boolean('paid')->nullable()->default(false);
            $table->enum('status', ['pending', 'processing', 'completed', 'in-delievery', 'delievered'])->nullable();
            $table->string('pick_up_location')->nullable();
            $table->date('date_to_deliever')->nullable();
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
        Schema::dropIfExists('orders');
    }
}