<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Lunar\Base\Migration;

return new class extends Migration
{
    public function up()
    {
        Schema::create('warehouse_transactions', function (Blueprint $table) {
            $table->id();
            $table->morphs('transactionable', 'transactionable_index');
            $table->unsignedBigInteger('warehouse_id');
            $table->enum('transaction_type', ['in', 'out', 'transfer']);
            $table->integer('quantity');
            $table->unsignedBigInteger('unit_id');
            $table->dateTime('transaction_date');
            $table->decimal('transaction_fee', 10, 2)->default(0);
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('warehouse_id')->references('id')->on('warehouses')->onDelete('cascade');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
            $table->foreign('currency_id')->references('id')->on($this->prefix.'currencies')->onDelete('set null');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warehouse_transactions');
    }
};
