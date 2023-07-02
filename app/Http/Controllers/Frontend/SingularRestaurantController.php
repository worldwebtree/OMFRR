<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\PostRestaurant;
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

        $usersFeedback =  new UsersFeedback();

        $feedbacks = $usersFeedback->where('post_restaurant_id', $id)
        ->get();

        // count feedbacks from users feedback
        $total_reviews = $usersFeedback->where([
            'post_restaurant_id' => $id,
        ])->count();

        $postRestaurant->findOrFail($id)
        ->update([
            'reviews' => $total_reviews,
        ]);

        $positive_ratting = $usersFeedback
        ->where(['post_restaurant_id' => $id, 'status' => 'positive'])
        ->count();

        $total_ratting = $postRestaurant->findOrFail($id)->reviews;

        $star_reviews = 0;

        if ($total_ratting > 0)
        $star_reviews = 5 * $positive_ratting / $total_ratting;

        return view('frontEnd.listing-singular', compact('restaurant', 'feedbacks', 'star_reviews'));
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
