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
    Schema::create('profiles', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
        // foreign key, User id এর সাথে linked
        $table->string('bio')->nullable(); // User এর Bio, optional
        $table->timestamps(); // created_at এবং updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
