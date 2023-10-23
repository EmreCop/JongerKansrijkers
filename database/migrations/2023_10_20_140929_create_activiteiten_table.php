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
            $table->foreignId("User_id")->constrained("users");

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activiteiten');
    }
};
