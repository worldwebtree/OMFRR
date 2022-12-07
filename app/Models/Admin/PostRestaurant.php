<?php

namespace App\Models\Admin;

use App\Models\Customer\UsersFeedback;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        'title',
        // 'description',
        'images',
    ];

    /**
     * Model Relationships
     * @return Illuminate\Database\Eloquent\Factories\Relationship
     */

    /**
      * PostRestaurant has a one to many relation with UsersFeedback model
      * @return Illuminate\Database\Eloquent\Relations\HasMany
      */
      public function users_feedback(): HasMany
      {
          return $this->hasMany(UsersFeedback::class);
      }
}
