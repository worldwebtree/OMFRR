<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Models\Admin\PostRestaurant;
use Illuminate\Http\Request;

class RestaurantManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostRestaurant $postRestaurant)
    {
        $restaurants = $postRestaurant->paginate(10);

        return view('dashboard.Restaurant.RestaurantManage', compact('restaurants'));
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
    public function store(Request $request, PostRestaurant $postRestaurant)
    {
        $request->validate([
            'restaurant_name' => ['required', 'string'],
            'restaurant_description' => ['required', 'string'],
            'restaurant_city' => ['required', 'string'],
            'restaurant_address' => ['required', 'string'],
            'restaurant_social_links' => ['required', 'array'],
            'restaurant_category' => ['required', 'string'],
            'restaurant_availability_from' => ['required'],
            'restaurant_availability_to' => ['required'],
        ]);

        $images = $request->file('restaurant_images');

        foreach ($images as $image) {
            // generating hashed file name
            $restaurantImages = $image->hashName();
            // saving the file with hashed name in storage
            $image->move(public_path('storage/Restaurant/images/'), $restaurantImages);

            $restaurantImagesArray[] = $restaurantImages;
        }

        $restaurantAvailabilities = array(
            'from' => $request->restaurant_availability_from,
            'to' => $request->restaurant_availability_to,
        );

        $socialMedia = array(
            'facebook',
            'twitter',
            'instagram',
        );

        $socialLinks = array_combine($socialMedia, $request->restaurant_social_links);

        $postRestaurant->create([
            'user_id' => $request->user()->id,
            'title' => ucwords($request->restaurant_name),
            'images' => json_encode($restaurantImagesArray),
            'description' => $request->restaurant_description,
            'city' => $request->restaurant_city,
            'address' => ucwords($request->restaurant_address),
            'social_links' => json_encode($socialLinks),
            'category' => $request->restaurant_category,
            'availability' => json_encode($restaurantAvailabilities),
        ]);

        return redirect()->route('restaurant.management')
        ->with('created', 'Restaurant post has been created successfully');
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
        dd($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostRestaurant $postRestaurant, $id)
    {
        $delete = $postRestaurant->findOrFail($id);

        $delete->delete();

        return redirect()->route('restaurant.management')
        ->with('deleted', 'Restaurant post has been deleted successfully');

    }
}
