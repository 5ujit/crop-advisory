<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('crops', function (Blueprint $table) {
        $table->id(); // Auto-incrementing ID
        $table->string('name'); // Crop name (e.g., Wheat, Rice)
        $table->string('description'); // Short description about the crop
        $table->string('ideal_conditions'); // Weather conditions for the crop
        $table->timestamps(); // Created at and updated at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crops');
    }
};
