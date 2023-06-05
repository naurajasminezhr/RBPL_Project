<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShowUserProfile;

class ShowUserProfileController extends Controller
{

     public function showUserProfile()
{
    return view('showuserprofile');
}

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required|email',
            'address' => 'required',
            'contact_number' => 'required',
            'province' => 'required',
            'city' => 'required',
            'birthday_month' => 'required',
            'birthday_day' => 'required|integer',
            'birthday_year' => 'required|integer',
        ]);

        $ShowUserProfile = new ShowUserProfile();
        $ShowUserProfile->first_name = $validatedData['first_name'];
        $ShowUserProfile->last_name = $validatedData['last_name'];
        $ShowUserProfile->email_address = $validatedData['email_address'];
        $ShowUserProfile->address = $validatedData['address'];
        $ShowUserProfile->contact_number = $validatedData['contact_number'];
        $ShowUserProfile->province = $validatedData['province'];
        $ShowUserProfile->city = $validatedData['city'];
        $ShowUserProfile->birthday_month = $validatedData['birthday_month'];
        $ShowUserProfile->birthday_day = $validatedData['birthday_day'];
        $ShowUserProfile->birthday_year = $validatedData['birthday_year'];
        $ShowUserProfile->save();

        return view('showuserprofile');
        //return redirect()->route('/showuserprofile/{id}')->with('success', 'User profile saved successfully.');
    }
    public function showUserData()
    {
        $ShowUserProfile = DB::table('user_profiles')->get(); // Retrieve growth data from the database table

        //dd($ShowUserProfile); // Add this line to display the data and stop further execution
        //return $ShowUserProfile;
        return view('showuserprofile', compact('showUserProfile'));
    }


}
