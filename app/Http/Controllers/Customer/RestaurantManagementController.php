<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer\UsersFeedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersFeedback $usersFeedback)
    {
        $user = Auth::user();

        $feedbacks = $usersFeedback->where('user_id', $user->id)
        ->with('user', 'post_restaurant')->paginate(2);

        return view('dashboard.Customer.restaurantManage', compact('feedbacks'));
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
    public function destroy(UsersFeedback $usersFeedback, $id)
    {
        $delete = $usersFeedback->findOrFail($id);

        $delete->delete();

        return redirect()->route('customer.restaurant.management.feedback')
        ->with('deleted', 'The feedback has been deleted successfully');
    }
}
