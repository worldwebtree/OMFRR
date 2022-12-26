<?php

use App\Models\Admin\RestaurantCategory;
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
        Schema::create('post_restaurants', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');
            $table->string('images', 1500);
            $table->string('city');
            $table->text('address', 1000);
            $table->enum('category', ['Dine In', 'Take Away', 'Dine In & Take Away']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_restaurants');
    }
};
