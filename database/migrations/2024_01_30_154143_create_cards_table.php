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
        Schema::create('cards', function (Blueprint $table) {

            $table->id();
            $table->string("name");
            $table->string("job_title");
            $table->string("department");
            $table->string("company_name");     
            $table->string("email")->unique();
            $table->string("telephone");
            $table->string("url_company");
            $table->string("address");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};