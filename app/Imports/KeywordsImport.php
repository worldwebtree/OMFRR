<?php

namespace App\Imports;

use App\Models\Admin\RattingKeywords;
use Maatwebsite\Excel\Concerns\ToModel;

class KeywordsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RattingKeywords([
            'keyword_name' => $row[0],
            'keyword_ratting' => $row[1],
        ]);
    }
}
