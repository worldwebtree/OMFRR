<?php

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
            $table->string('city');
            $table->text('address', 1000);
            $table->json('social_links', 10000)->nullable();
            $table->enum('category', ['Dine In', 'Take Away', 'Dine In & Take Away']);
            $table->json('availability');
            $table->bigInteger('reviews')->nullable()->default(0);

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
