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
        $positive_keywords = $this->Keywords();

        // dd($this->Keywords());
        // exit();

        // If we find a positive match, assume the feedback is positive.
        // Otherwise, assume it's negative or neutral.

        foreach ($positive_keywords as $words => $status) {
            preg_match("/$words/i", $feedback, $matches, PREG_OFFSET_CAPTURE);

            return $status;
        }

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

        // If we find a negative match, assume the feedback is negative.
        // Otherwise, assume it's positive or neutral.
        foreach ($negative_keywords as $keyword) {
            $negative_rate = str_contains(strip_tags($feedback), $keyword->keyword_name);

            if ($negative_rate === true) {
                return "negative";
            }
        }
    }

    /**
     * This function contains all the keywords good or bad that can exist in customer's feedback
     * @return array
     */
    public function Keywords()
    {
        $keywords = array(
            'great' => 'positive',
            'good' => 'positive',
            'filthy' => 'negative',
            'bad' => 'negative',
        );

        return $keywords;
    }
}
