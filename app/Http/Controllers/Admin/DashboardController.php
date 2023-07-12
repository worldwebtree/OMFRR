<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\NewsLetterSubscribers;
use App\Models\Admin\PostRestaurant;
use App\Models\Admin\UserContact;
use App\Models\Customer\UsersFeedback;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user,
                            PostRestaurant $postRestaurant,
                            UsersFeedback $usersFeedback,
                            UserContact $userContact,
                            NewsLetterSubscribers $newsLetterSubscribers)
    {
        $users = $user->where('role', 'user')->count();
        $posts = $postRestaurant->count();
        $feedbacks = $usersFeedback->count();
        $queries = $userContact->count();
        $subscribers = $newsLetterSubscribers->count();

        return view('dashboard.Admin.dashboard',
        compact('users', 'posts', 'feedbacks', 'queries', 'subscribers'));
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
