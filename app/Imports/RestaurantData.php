<?php

namespace App\Imports;

use App\Models\Admin\PostRestaurant;
use Maatwebsite\Excel\Concerns\ToModel;
use stdClass;

class RestaurantData implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $fileArray =  explode(",",$row[2]);
        // $object = new stdClass();

        foreach ($fileArray as $index => $image) {

            // $object->$index = $image;

            // $restaurantImages = $image->hashName();
            // dd($restaurantImages);

            // saving the file with hashed name in storage
            // $image->move(public_path('storage/Restaurant/images'), $image);

            // $restaurantImagesArray[] = $image;
        }
        exit();

        return new PostRestaurant([
            'title' => ucwords($row[0]),
            'description' => $row[1],
            // 'images' => json_encode($restaurantImagesArray),
            'city' => $row[3],
            'address' => ucwords($row[4]),
            'category' => $row[5],
        ]);
    }
}
