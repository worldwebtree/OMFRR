<?php

namespace App\Imports;

use App\Models\Admin\PostRestaurant;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RestaurantData implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PostRestaurant([
            'title' => ucwords($row['title']),
            'description' => $row['description'],
            'images' => $row['images'],
            'city' => $row['city'],
            'address' => $row['address'],
            'category' => $row['category'],
            'overall_ratting' => !empty($row['overall_ratting']) ? $row['overall_ratting'] : null,
        ]);
    }
}
