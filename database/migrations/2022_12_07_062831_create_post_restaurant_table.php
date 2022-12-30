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
            $table->text('description')
            ->nullable();
            $table->string('images', 10000)
            ->nullable();
            $table->string('city')
            ->nullable();
            $table->text('address', 1000)
            ->nullable();
            $table->enum('category', ['Dine In', 'Take Away', 'Dine In & Take Away']);
            $table->bigInteger('overall_ratting')
            ->nullable();

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
