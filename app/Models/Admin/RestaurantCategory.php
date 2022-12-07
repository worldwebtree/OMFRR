<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RestaurantCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category'
    ];

    /**
     * Model Relationships
     * @return Illuminate\Database\Eloquent\Factories\Relationship
     */

    /**
     * RestaurantCategory has a one to many relation with PostRestaurant model
    * @return Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function post_restaurant(): HasMany
    {
        return $this->hasMany(PostRestaurant::class);
    }
}
