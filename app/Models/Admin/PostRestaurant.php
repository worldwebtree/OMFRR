<?php

namespace App\Models\Admin;

use App\Models\Customer\UsersFeedback;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'description',
        'images',
    ];

        /**
      * PostRestaurant Relationships
      * PostRestaurant belongsTo users_feedback model
      *
      * @return Illuminate\Database\Eloquent\Factories\Relationship
      * @return Illuminate\Database\Eloquent\Relations\BelongsTo
      */
      public function users_feedback(): BelongsTo
      {
          return $this->belongsTo(UsersFeedback::class);
      }
}
