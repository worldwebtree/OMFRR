<?php

namespace App\Models\Customer;

use App\Models\Admin\PostRestaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UsersFeedback extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'username',
        'feedback',
    ];

     /**
      * users_feedback Relationships
      * users_feedback belongsTo user model
      *
      * @return Illuminate\Database\Eloquent\Factories\Relationship
      * @return Illuminate\Database\Eloquent\Relations\BelongsTo
      */
      public function user(): BelongsTo
      {
          return $this->belongsTo(User::class);
      }

    /**
      * users_feedback Relationships
      * users_feedback has a one to many relation with PostRestaurant model
      *
      * @return Illuminate\Database\Eloquent\Factories\Relationship
      * @return Illuminate\Database\Eloquent\Relations\HasMany
      */
    public function post_restaurants(): HasMany
    {
        return $this->hasMany(PostRestaurant::class);
    }
}
