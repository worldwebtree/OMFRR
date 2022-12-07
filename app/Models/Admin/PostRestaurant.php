<?php

namespace App\Models\Admin;

use App\Models\Customer\UsersFeedback;
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
        'restaurant_category_id',
        'title',
        'description',
        'images',
        'city',
        'address'
    ];

    /**
     * Model Relationships
     * @return Illuminate\Database\Eloquent\Factories\Relationship
     */

    /**
     * PostRestaurant belongs To RestaurantCategory model
    * @return Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function restaurant_category(): BelongsTo
    {
        return $this->belongsTo(RestaurantCategory::class);
    }

    /**
      * PostRestaurant has a one to many relation with UsersFeedback model
      * @return Illuminate\Database\Eloquent\Relations\HasMany
      */
      public function users_feedback(): HasMany
      {
          return $this->hasMany(UsersFeedback::class);
      }
}
