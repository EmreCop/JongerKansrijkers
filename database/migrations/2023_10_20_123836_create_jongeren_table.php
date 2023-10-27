<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('jongeren', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->date("Birthday");
            $table->string("Gender");
            $table->string("Address");
            $table->string("City");
            $table->string("Zipcode");
            $table->foreignId("InstituutId")->constrained("instituut");
    
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jongeren');
    }
};
