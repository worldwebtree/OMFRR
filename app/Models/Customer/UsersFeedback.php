<?php

namespace App\Models\Customer;

use App\Models\Admin\PostRestaurant;
use App\Models\Admin\RattingKeywords;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'post_restaurant_id',
        'username',
        'restaurant_name',
        'feedback',
        'feedback_status',
        'category',
    ];

    /**
     * Model Relationships
     * @return Illuminate\Database\Eloquent\Factories\Relationship
     */

    /**
      * UsersFeedback belongs to User model
      * @return Illuminate\Database\Eloquent\Relations\BelongsTo
      */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
      * UsersFeedback belongs to PostRestaurant model
      * @return Illuminate\Database\Eloquent\Relations\BelongsTo
      */
    public function post_restaurant(): BelongsTo
    {
        return $this->belongsTo(PostRestaurant::class);
    }

    /**
      * UsersFeedback belongs to RattingKeywords model
      * @return Illuminate\Database\Eloquent\Relations\BelongsTo
      */
    public function ratting_keywords(): BelongsTo
    {
        return $this->belongsTo(RattingKeywords::class);
    }
}
