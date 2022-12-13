<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\PostRestaurant;
use Illuminate\Http\Request;

class RestaurantListeningPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostRestaurant $postRestaurant)
    {
        $restaurants = $postRestaurant->paginate(15);

        return view('frontEnd.search-result', compact('restaurants'));
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
        $request->validate([
            'category' => ['required', 'string'],
            'location' => ['required', 'string'],
        ]);

        $restaurant = PostRestaurant::where([
            'category' => $request->category,
            'city' => $request->location,
        ])->paginate(15);

        return view('frontEnd.search-result', compact('restaurant'));
    }

    /**
     * Searches restaurants by name and city.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchByName(Request $request)
    {
        $request->validate([
            'restaurant_name' => ['required', 'string'],
            'restaurant_city' => ['required', 'string'],
        ]);

        $restaurantsByName = PostRestaurant::where([
            'title' => ucwords($request->restaurant_name),
            'city' => ucfirst($request->restaurant_city),
        ])->paginate(15);

        return view('frontEnd.search-result', compact('restaurantsByName'));
    }

    /**
     * Searches a restaurant with category name.
     *
     * @param  string  $category
     * @return \Illuminate\Http\Response
     */
    public function searchByCategory($category)
    {
        $restaurantsByCategory = PostRestaurant::where([
            'category' => $category,
        ])->paginate(15);

        return view('frontEnd.search-result', compact('restaurantsByCategory'));
    }

    /**
     * Searches a restaurant with location name.
     *
     * @param  string  $location
     * @return \Illuminate\Http\Response
     */
    public function searchByLocation($location)
    {
        $restaurantsByLocation = PostRestaurant::where([
            'city' => $location,
        ])->paginate(15);

        return view('frontEnd.search-result', compact('restaurantsByLocation'));
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
