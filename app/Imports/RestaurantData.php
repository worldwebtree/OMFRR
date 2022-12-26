<?php

namespace App\Imports;

use App\Models\Admin\PostRestaurant;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use PhpOffice\PhpSpreadsheet\IOFactory;
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
        // dd($row);
        // exit();

        // $object = new stdClass();

        foreach ($fileArray as $image) {

            // $object->$index = $image;
            // dd($image);
            // exit();

            $restaurantImages = Hash::make($image);
            dd($restaurantImages);

            // saving the file with hashed name in storage
            // $image->move(public_path('storage/Restaurant/images'), $image);

            // $restaurantImagesArray[] = $image;
        }
        // exit();

        // return new PostRestaurant([
        //     'title' => ucwords($row[0]),
        //     'description' => null,
        //     'images' => json_encode($restaurantImagesArray),
        //     'city' => $row[1],
        //     'address' => ucwords($row[3]),
        //     'category' => "Dine In & Take Away",
        // ]);
    }
}
