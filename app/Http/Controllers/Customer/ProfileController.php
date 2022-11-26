<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Controller;
use App\Rules\AuthPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends AuthenticatedSessionController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.Customer.profile');
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
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'gender' => ['required'],
        ]);

        // retrieving authenticated user
        $user = $request->user();

        // checking if the $request variable contain's a file named avatar
        if (!$request->hasFile('avatar')) {

            $avatarName = $user->avatar;

        } else {

            $file = $request->file('avatar');

            // generating hashed file name
            $avatarName = $file->hashName();

            // saving the file with hashed name in storage
            $file->move(public_path('storage/profile_img/'), $avatarName);
        }

        // updating authenticated user's credentials
        $user->update([
            'name' => $request['name'],
            'gender' => $request['gender'],
            'avatar' => $avatarName
        ]);

        return redirect()->route('customer.profile')
        ->with('updated', 'Your Profile has been updated successfully');
    }

            /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'old_password' => ['required', 'string', new AuthPassword],
            'new_password' => ['required', 'confirmed'],
        ]);

        // retrieving authenticated user
        $user = $request->user();

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        // logging out authenticated user after updating password
        Auth::logout($user);

        // logging In authenticated user with updated password
        Auth::login($user);

        return $this->redirectTo()
        ->with('updated', 'Your password has been reset successfully');
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
