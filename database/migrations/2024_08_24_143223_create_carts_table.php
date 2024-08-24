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
        Schema::create('cart', function (Blueprint $table) {  // Changed to 'carts'
            $table->id();
            $table->string("cname", 255)->nullable();
            $table->unsignedBigInteger("cid")->nullable();  // Changed to unsignedBigInteger
            $table->string("pname", 255)->nullable();
            $table->unsignedBigInteger("pid")->nullable();  // Changed to unsignedBigInteger
            $table->integer("quantity")->nullable();  // Changed to integer
            $table->decimal("price", 8, 2);  // Increased decimal precision to 8,2
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');  // Changed to 'carts' to match the table name
    }
};
