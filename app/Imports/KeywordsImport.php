<?php

namespace App\Imports;

use App\Models\Admin\RattingKeywords;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KeywordsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RattingKeywords([
            'keyword_name' => $row['words'],
            'keyword_status' => $row['status'],
            'keyword_ratting' => $row['ratting'],
        ]);
    }
}
