<?php
namespace App\Traits;

use App\Models\Admin\RattingKeywords;

trait AnalyzeFeedback
{
    /**
     * This function will analyze the user feedback with the provided keywords
     * and assume it's positive, negative or neutral.
     *
     * @return string
     */
    public function PositiveAnalyze($feedback)
    {
        $rattingKeywords = new RattingKeywords();

        $positive_keywords = $rattingKeywords->where('keyword_status', 'positive')->get('keyword_name');

        // If we find a positive match, assume the feedback is positive. Otherwise, assume it's or neutral.
        $check = $positive_keywords->map(function ($keyword) use ($feedback){
            $positive_rate = str_contains(strip_tags($feedback), $keyword->keyword_name);

            return $positive_rate === true ? $keyword->keyword_name : false;

        });

        dd($check->count());
        exit();
    }

    /**
     * This function will analyze the user feedback with the provided keywords
     * and assume it's positive, negative or neutral.
     *
     * @return string
     */
    public function NegativeAnalyze($feedback)
    {
        $rattingKeywords = new RattingKeywords();

        $negative_keywords = $rattingKeywords->where('keyword_status', 'negative')->get('keyword_name');

        // If we find a negative match, assume the feedback is negative. Otherwise, assume it's positive or neutral.
        foreach ($negative_keywords as $keyword) {
            $negative_rate = str_contains(strip_tags($feedback), $keyword->keyword_name);

            if ($negative_rate === true) {
                return "negative";
            }
        }
    }
}
