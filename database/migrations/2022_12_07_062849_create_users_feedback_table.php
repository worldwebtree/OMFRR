<?php

use App\Models\Admin\PostRestaurant;
use App\Models\Admin\UsersFeedbackCategory;
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
        Schema::create('users_feedback', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)
            ->constrained()
            ->cascadeOnDelete();

            $table->foreignIdFor(PostRestaurant::class)
            ->constrained()
            ->cascadeOnDelete();

            $table->string('username');
            $table->string('user_ip')->unique();
            $table->string('restaurant');
            $table->text('feedback');
            $table->enum('status', ['positive', 'negative', 'neutral']);

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
        Schema::dropIfExists('users_feedback');
    }
};
