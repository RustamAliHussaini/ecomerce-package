<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Lunar\Base\Migration;

return new class extends Migration
{
    public function up()
    {
          Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('area');
            $table->integer('no_of_room');
            $table->string('longitude');
            $table->string('latitude');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('state_id');
            $table->string('city');
            $table->string('postal_code');
            $table->string('address_line_one')->nullable();
            $table->string('address_line_two')->nullable();
            $table->string('tenant_id');
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on($this->prefix . 'countries')->onDelete('cascade');
            $table->foreign('state_id')->references('id')->on($this->prefix . 'states')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('set null');
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('set null');
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('warehouses');
    }
};
