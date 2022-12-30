<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\PostRestaurant;
use App\Models\Admin\RattingKeywords;
use App\Models\Customer\UsersFeedback;
use Illuminate\Http\Request;

class SingularRestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostRestaurant $postRestaurant, $id)
    {
        $restaurant = $postRestaurant->where('id', $id)
        ->get();

        $feedbacks = UsersFeedback::where('post_restaurant_id', $id)
        ->get();

        $check = $this->match_keyword($feedbacks);
        // dd($check);
        // exit();

        return view('frontEnd.listing-singular', compact('restaurant', 'feedbacks'));
    }

    /**
     * This function will match the provided keywords with the user feedbacks
     * @return string
     */
    public function match_keyword($feedbacks)
    {
        $positive_pattern = '/good|great|excellent|fantastic|marvelous|outstanding|awesome|amazing|gorgeous|attractive|wow/i';
        $negative_pattern = '/bad|terrible|awful|poor|shitty|horrible|outrageous/i';

        $RestaurantFeedbacks = $feedbacks->pluck('feedback');
        // $string = "The service was outstanding";

        $rattingKeywords = new RattingKeywords();

        $positive_keywords = $rattingKeywords->where('keyword_status', 'positive')->value('keyword_name');
        $negative_keywords = $rattingKeywords->where('keyword_status', 'negative')->value('keyword_name');

        $positive_match = str_contains($RestaurantFeedbacks, $positive_keywords);
        $negative_match = str_contains($RestaurantFeedbacks, $negative_keywords);

        // If we find a positive match, assume the feedback is positive. Otherwise, assume it's negative.
        if ($positive_match === true) {

            //  dd('positive');
             dd(count($RestaurantFeedbacks));

        } else if ($negative_match === true) {

                    dd('negative');
        } else {

                    dd('neutral');
        }
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
    public function store(Request $request)
    {
        //
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
