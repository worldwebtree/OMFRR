<?php

namespace App\Models\Admin;

use App\Models\Customer\UsersFeedback;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PostRestaurant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'city',
        'address',
        'social_links',
        'category',
        'availability',
        'reviews',
    ];

    /**
      * PostRestaurant has a one to many relation with UsersFeedback model
      * @return Illuminate\Database\Eloquent\Relations\HasMany
      */
      public function users_feedback(): HasMany
      {
          return $this->hasMany(UsersFeedback::class);
      }

      /**
       * PostRestaurant belongs to a user
       *
       * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
       */
      public function user(): BelongsTo
      {
          return $this->belongsTo(User::class);
      }

      /**
       * PostRestaurant has a one to many relation with post_restaurant_meta model
       *
       * @return \Illuminate\Database\Eloquent\Relations\HasMany
       */
      public function post_restaurant_meta(): HasMany
      {
          return $this->hasMany(PostRestaurantMeta::class,);
      }
}
