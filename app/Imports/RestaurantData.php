<?php

namespace App\Imports;

use App\Models\Admin\PostRestaurant;
use Maatwebsite\Excel\Concerns\ToModel;

class RestaurantData implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // $fileArray = explode(",",$row[2]);

        // foreach ($fileArray as $image) {

        //     // generating hashed file name
        //     $restaurantImages = $image->hashName();

        //     // saving the file with hashed name in storage
        //     $image->move(public_path('storage/Restaurant/images'), $restaurantImages);

        //     $restaurantImagesArray[] = $restaurantImages;
        // }

        return new PostRestaurant([
            'title' => ucwords($row[0]),
            'description' => $row[1],
            // 'images' => json_encode($restaurantImagesArray),
            'images' => json_encode(['image.jpg','image.jpg','image.jpg','image.jpg']),
            'city' => $row[3],
            'address' => ucwords($row[4]),
            'category' => $row[5],
        ]);
    }
}
