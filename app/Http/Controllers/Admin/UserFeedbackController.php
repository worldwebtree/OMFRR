<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer\UsersFeedback;
use App\Notifications\UserFeedbackNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class UserFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersFeedback $usersFeedback)
    {
        $feedbacks = $usersFeedback->with('user', 'post_restaurant')->paginate(10);

        return view('dashboard.Admin.User.userFeedback', compact('feedbacks'));
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

        $users_feedback = $delete;

        Notification::send($users_feedback->user, new UserFeedbackNotification($users_feedback));

        $delete->delete();

        return redirect()->route('admin.users.feedback')
        ->with('deleted', "User Feedback has been deleted successfully");

    }
}
