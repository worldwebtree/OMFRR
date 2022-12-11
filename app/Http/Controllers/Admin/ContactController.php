<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ContactUs $contactUs)
    {
        $contact = $contactUs->get();

        return view('dashboard.Admin.contactUs', compact('contact'));
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
            'phone' => ['required', 'numeric', 'digits_between:10,15'],
            'email' => ['required', 'string'],
            'address' => ['required', 'string'],
            'customer_support_email' => ['required', 'string'],
            'socialLinks' => ['required', 'array'],
        ]);

        ContactUs::create([
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'customer_support_email' => $request->customer_support_email,
            'social_links' => json_encode($request->socialLinks),
        ]);

        return redirect()->route('admin.contact')
        ->with('created', 'Contact information has been added successfully');
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
    public function update(Request $request, ContactUs $contactUs, $id)
    {
         $request->validate([
            'phone' => ['required', 'numeric', 'digits_between:10,15'],
            'email' => ['required', 'string'],
            'address' => ['required', 'string'],
            'customer_support_email' => ['required', 'string'],
            'socialLinks' => ['required', 'array'],
        ]);

        $contact = $contactUs->findOrFail($id);

        $contact->update([
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'customer_support_email' => $request->customer_support_email,
            'social_links' => json_encode($request->socialLinks),
        ]);

        return redirect()->route('admin.contact')
        ->with('updated', 'Contact information has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactUs $contactUs, $id)
    {
        $contact = $contactUs->findOrFail($id);

        $contact->delete();

        return redirect()->route('admin.about')
        ->with('deleted', 'Contact information has been deleted successfully');
    }
}
