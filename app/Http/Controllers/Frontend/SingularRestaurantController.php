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

        $restaurant_ratting = $restaurant->value('overall_ratting');

        $usersFeedback =  new UsersFeedback();

        $feedbacks = $usersFeedback->where('post_restaurant_id', $id)
        ->get();

        // count positive ratting from user feedback table
        $positive_ratting = $usersFeedback->where([
            'post_restaurant_id' => $id,
            'feedback_status' => 'positive',
        ])
        ->count();

        // adding restaurant previous ratting with new positive ratting
        $overall_ratting = $restaurant_ratting + $positive_ratting;

        // count negative ratting from user feedback table
        $negative_ratting = $usersFeedback->where([
            'post_restaurant_id' => $id,
            'feedback_status' => 'negative',
            ])
        ->count();

        $count_overall_reviews = $restaurant_ratting + $positive_ratting + $negative_ratting;

        // subtracting negative ratting from overall ratting
        $final_ratting = $overall_ratting - $negative_ratting;

        $postRestaurant->findOrFail($id)
        ->update([
            'overall_ratting' => $final_ratting,
        ]);

        $intLength = strlen($final_ratting);

        // dividing final ratting by 100 to get value in decimal form
        if ($intLength === 5) {
            $final_decimal_ratting = $final_ratting / 10000;

        } elseif ($intLength === 4) {
            $final_decimal_ratting = $final_ratting / 1000;

        } elseif ($intLength === 1) {
            $final_decimal_ratting = $final_ratting / 1;

        } else {
            $final_decimal_ratting = $final_ratting / 100;
        }

        $service_ratting = $this->serviceRatting($postRestaurant, $id);

        $food_ratting = $this->foodRatting($postRestaurant, $id);

        $recommend = $this->recommended($id);

        $highest_ratting = str_starts_with($final_decimal_ratting, "6") || str_starts_with($final_decimal_ratting, "7") || str_starts_with($final_decimal_ratting, "8");

        if ($highest_ratting === true) {
            $final_decimal_ratting = 5;

        } elseif (strlen($final_decimal_ratting) ===  6) {
            $final_decimal_ratting = 5;
        }

        return view('frontEnd.listing-singular',
        compact('restaurant',
                'feedbacks',
                'count_overall_reviews',
                'final_decimal_ratting',
                'service_ratting',
                'food_ratting',
                'recommend'
        ));
    }

    /**
     * This function will calculate review ratting for the service category
     *
     * @return int
     */
    public function serviceRatting($postRestaurant, $id)
    {
        $restaurant = $postRestaurant->where('id', $id)
        ->get();

        $restaurant_ratting = $restaurant->value('overall_ratting');

        $usersFeedback =  new UsersFeedback();

        // count positive ratting from user feedback table
        $positive_ratting = $usersFeedback->where([
            'post_restaurant_id' => $id,
            'feedback_status' => 'positive',
            'category' => 'service',
        ])
        ->count();

        // adding restaurant previous ratting with new positive ratting
        $overall_ratting = $restaurant_ratting + $positive_ratting;

        // count negative ratting from user feedback table
        $negative_ratting = $usersFeedback->where([
            'post_restaurant_id' => $id,
            'feedback_status'=> 'negative',
            'category' => 'service',
        ])
        ->count();

        // subtracting negative ratting from overall ratting
        $final_ratting = $overall_ratting - $negative_ratting;

        $intLength = strlen($final_ratting);

        // dividing final ratting by 100 to get value in decimal form
        if ($intLength === 5) {
            $final_decimal_ratting = $final_ratting / 10000;

        } elseif ($intLength === 4) {
            $final_decimal_ratting = $final_ratting / 1000;

        } elseif ($intLength === 1) {
            $final_decimal_ratting = $final_ratting / 1;

        } else {
            $final_decimal_ratting = $final_ratting / 100;
        }

        $highest_ratting = str_starts_with($final_decimal_ratting, "6") || str_starts_with($final_decimal_ratting, "7") || str_starts_with($final_decimal_ratting, "8");

        if ($highest_ratting === true) {
            return $final_decimal_ratting = 5;
        }
    }

    /**
     * This function will calculate review ratting for the food category
     *
     * @return int
     */
    public function foodRatting($postRestaurant, $id)
    {
        $restaurant = $postRestaurant->where('id', $id)
        ->get();

        $restaurant_ratting = $restaurant->value('overall_ratting');

        $usersFeedback =  new UsersFeedback();

        // count positive ratting from user feedback table
        $positive_ratting = $usersFeedback->where([
            'post_restaurant_id' => $id,
            'feedback_status' => 'positive',
            'category' => 'food',
        ])
        ->count();

        // adding restaurant previous ratting with new positive ratting
        $overall_ratting = $restaurant_ratting + $positive_ratting;

        // count negative ratting from user feedback table
        $negative_ratting = $usersFeedback->where([
            'post_restaurant_id' => $id,
            'feedback_status'=> 'negative',
            'category' => 'food',
        ])
        ->count();

        // subtracting negative ratting from overall ratting
        $final_ratting = $overall_ratting - $negative_ratting;

        $intLength = strlen($final_ratting);

        // dividing final ratting by 100 to get value in decimal form
        if ($intLength === 5) {
            $final_decimal_ratting = $final_ratting / 10000;

        } elseif ($intLength === 4) {
            $final_decimal_ratting = $final_ratting / 1000;

        } elseif ($intLength === 1) {
            $final_decimal_ratting = $final_ratting / 1;

        } else {
            $final_decimal_ratting = $final_ratting / 100;
        }

        $highest_ratting = str_starts_with($final_decimal_ratting, "6") || str_starts_with($final_decimal_ratting, "7") || str_starts_with($final_decimal_ratting, "8");

        if ($highest_ratting === true) {
            return $final_decimal_ratting = 5;
        }
    }

    /**
     *
     */
    public function recommended($id)
    {
        $usersFeedback = new UsersFeedback();

        $recommendService = $usersFeedback->where([
            'post_restaurant_id' => $id,
            'category' => 'service'
        ])->count();

        $recommendFood = $usersFeedback->where([
            'post_restaurant_id' => $id,
            'category' => 'food'
        ])->count();

        if ($recommendService > $recommendFood ) {
            return "service";

        }elseif ($recommendFood > $recommendService) {
            return "food";

        }elseif($recommendService = $recommendFood){
            return "both";

        }else {
            return "not ratted yet";
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
