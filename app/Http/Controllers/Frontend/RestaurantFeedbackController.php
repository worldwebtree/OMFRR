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

        $restaurant_name = PostRestaurant::findOrFail($id);

        $analyzer = new Analyzer();

        $check_feedback = $analyzer->getSentiment($request->feedback);

        dd($check_feedback);

        if ($check_feedback['compound'] === "positive") {
            $feedback_status = "positive";

        } elseif ($check_feedback === "negative") {
            $feedback_status = "negative";

        } else {
            $feedback_status = "neutral";
        }

        UsersFeedback::create([
            'user_id' => $user->id,
            'post_restaurant_id' => $id,
            'username' => $user->name,
            'restaurant_name' => $restaurant_name->title,
            'feedback' => ucfirst(strip_tags($request->service_feedback)),
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
