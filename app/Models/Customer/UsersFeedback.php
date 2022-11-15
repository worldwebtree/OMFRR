<?php

namespace App\Models\Customer;

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
        'username',
        'feedback',
    ];

     /**
      * User Relationships
      * users_feedback belongsTo user model
      *
      * @return Illuminate\Database\Eloquent\Factories\Relationship
      * @return Illuminate\Database\Eloquent\Relations\BelongsTo
      */
      public function users_feedback(): BelongsTo
      {
          return $this->belongsTo(User::class);
      }
}
