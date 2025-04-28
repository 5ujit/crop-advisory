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
    Schema::create('crop_suggestions', function (Blueprint $table) {
        $table->id();
        $table->string('crop_name');
        $table->string('region');
        $table->string('soil_type');
        $table->string('season');
        $table->string('water_availability');
        $table->string('profit_potential')->nullable();
        $table->string('growth_duration')->nullable();
        $table->string('water_requirement')->nullable();
        $table->string('temperature_range')->nullable();
        $table->string('image_url')->nullable(); // ✅ Add this line for image path
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crop_suggestions');
    }
};
