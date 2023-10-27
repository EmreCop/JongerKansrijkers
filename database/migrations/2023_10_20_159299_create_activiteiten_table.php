<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('activiteiten', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->string("Description");
            $table->dateTime("StartDate");
            $table->dateTime("EndDate");
            $table->string("Location");
            $table->foreignId("jongerenId")->constrained("jongeren");
            $table->foreignId("UserId")->constrained("users");
            $table->timestamps();
         });

    }

    public function down(): void
    {
        Schema::dropIfExists('activiteiten');
    }
};
