<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\PostRestaurant;
use App\Models\Customer\UsersFeedback;
use Illuminate\Http\Request;
use App\Traits\AnalyzeFeedback;
use Sentiment\Analyzer;

class RestaurantFeedbackController extends Controller
{
    use AnalyzeFeedback;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function feedback(Request $request, $id)
    {
        $request->validate([
            'feedback' => ['required', 'string'],
        ]);

        $user = $request->user();

        $post_restaurant = PostRestaurant::findOrFail($id);

        $analyzer = new Analyzer();

        $get_sentiment = $analyzer->getSentiment($request->feedback);

        switch ($get_sentiment) {
            case $get_sentiment['pos'] > $get_sentiment['neg']:

                $get_feedback = 'positive';
                break;

            case $get_sentiment['neg'] > $get_sentiment['pos']:

                $get_feedback = 'negative';
                break;

            case $get_sentiment['neu'] > $get_sentiment['pos'] && $get_sentiment['neg']:

                $get_feedback = 'neutral';
                break;
        }

        if ($get_feedback === "positive") {
            $feedback_status = "positive";

        } elseif ($get_feedback === "negative") {
            $feedback_status = "negative";

        } elseif($get_feedback === "neutral") {
            $feedback_status = "neutral";
        }

        UsersFeedback::create([
            'user_id' => $user->id,
            'post_restaurant_id' => $post_restaurant->id,
            'username' => $user->name,
            'restaurant_name' => $post_restaurant->title,
            'feedback' => ucfirst(strip_tags($request->feedback)),
            'feedback_status' => $feedback_status,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
