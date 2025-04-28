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
    Schema::create('pest_alerts', function (Blueprint $table) {
        $table->id();
        $table->string('location');
        $table->string('crop');
        $table->enum('severity', ['Low', 'Medium', 'High', 'Critical']);
        $table->text('description');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('pest_alerts');
}

};
