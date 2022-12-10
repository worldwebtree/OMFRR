<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\PostRestaurant;
use App\Models\Customer\UsersFeedback;
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

        return view('dashboard.Admin.Restaurant.RestaurantManage', compact('restaurants'));
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
            'restaurant_category' => ['required', 'string'],

        ]);

        $files = $request->hasFile("restaurant_images");

        // checking if the $request variable contain's a file named restaurant_images
        if (!$files) {

            $restaurantImages = $postRestaurant->images;

        } else {

            $images = $request->file('restaurant_images');

            foreach ($images as $image) {

                // generating hashed file name
                $restaurantImages = $image->hashName();

                // saving the file with hashed name in storage
                $image->move(public_path('storage/Restaurant/images'), $restaurantImages);

                $restaurantImagesArray[] = $restaurantImages;
            }
        }

        $postRestaurant->create([
            'title' => ucwords($request->restaurant_name),
            'description' => strip_tags($request->restaurant_description),
            'images' => json_encode($restaurantImagesArray),
            'city' => $request->restaurant_city,
            'address' => ucfirst($request->restaurant_address),
            'category' => $request->restaurant_category,
        ]);

        return redirect()->route('admin.restaurant.management')
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
        //
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

        return redirect()->route('admin.restaurant.management')
        ->with('deleted', 'Restaurant post has been deleted successfully');

    }
}
