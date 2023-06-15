<?php

use App\Models\Admin\RestaurantCategory;
use App\Models\User;
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

            $table->foreignIdFor(User::class)
            ->constrained()
            ->cascadeOnDelete();

            $table->string('title');
            $table->text('description');
            $table->json('images', 10000);
            $table->string('city');
            $table->text('address', 1000);
            $table->json('social_links', 10000)->nullable();
            $table->enum('category', ['Dine In', 'Take Away', 'Dine In & Take Away']);
            $table->time('availability');
            $table->bigInteger('overall_ratting')->nullable();

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
