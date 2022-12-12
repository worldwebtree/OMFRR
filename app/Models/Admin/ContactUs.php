<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'phone',
        'email',
        'address',
        'customer_support_email',
        'social_links'
    ];

    public static function getContactInformation()
    {
        return ContactUs::get(['address', 'customer_support_email', 'social_links']);
    }
}
