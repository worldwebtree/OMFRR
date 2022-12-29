<?php

namespace App\Imports;

use App\Models\Admin\PostRestaurant;
use Illuminate\Http\Testing\File as TestingFile;
use Illuminate\Support\Facades\File;
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
        return new PostRestaurant([
            'title' => ucwords($row[0]),
            'description' => null,
            'images' => $row[6],
            'city' => $row[1],
            'address' => ucwords($row[3]),
            'category' => "Dine In & Take Away",
            'overall_ratting' => !empty($row[2]) ? $row[2] : null,
        ]);
    }
}
