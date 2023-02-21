<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tag_id')->nullable()->index()->constrained('tags');
            $table->foreignId('product_id')->nullable()->index()->constrained('products');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->integer('tags')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_tags');
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('tags');
        });
    }
};
