<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\PostRestaurant;
use App\Models\Customer\UsersFeedback;
use App\Notifications\NotifyRestaurantUserFeedback;
use Illuminate\Http\Request;
use App\Traits\AnalyzeFeedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
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
        $users_feedback = new UsersFeedback();

        $analyzer = new Analyzer();

        $get_sentiment = $analyzer->getSentiment($request->feedback);

        switch ($get_sentiment) {

            case $get_sentiment['compound'] > 0:

                $feedback_status = 'positive';
                break;

            case $get_sentiment['compound'] < 0:

                $feedback_status = 'negative';
                break;

            case $get_sentiment['compound'] === 0.0:

                $feedback_status = 'neutral';
                break;
        }

        $exits = $users_feedback->where([
            'post_restaurant_id' => $post_restaurant->id,
            'user_ip' => $request->ip()
        ])->exists();

        if ($exits === true)
        return response()->json('exists', 409);

        $get_feedback = $users_feedback->create([
            'user_id' => $user->id,
            'post_restaurant_id' => $post_restaurant->id,
            'username' => $user->name,
            'user_ip' => $request->ip(),
            'restaurant' => $post_restaurant->title,
            'feedback' => ucfirst(strip_tags($request->feedback)),
            'status' => $feedback_status,
        ]);

        // notify the restaurant about new feedback
        Notification::send($post_restaurant->user, new NotifyRestaurantUserFeedback($get_feedback));

        if ($post_restaurant->reviews === 0) {

            $post_restaurant->update(['reviews' => 1]);
        }else {
            $post_restaurant->increment('reviews');
        }

        $feedback = array(
            'username' => $get_feedback->username,
            'feedback' => $get_feedback->feedback,
            'created_at' => $get_feedback->created_at->format('d-M-Y'),
        );

        return response()->json(['feedback' => $feedback]);
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
