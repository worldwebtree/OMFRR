<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostRestaurantMeta extends Model
{
    use HasFactory;

    protected $table = 'post_restaurant_meta';

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'post_restaurant_id',
        'meta_key',
        'meta_value'
    ];

    /**
     * PostRestaurantMeta belongs to a PostRestaurant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post_restaurant(): BelongsTo
    {
        return $this->belongsTo(PostRestaurant::class,);
    }
}
