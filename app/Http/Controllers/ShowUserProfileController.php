<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ShowUserProfile;


class ShowUserProfileController extends Controller
{
   /* public function showUserProfile()
{
    return view('showuserprofile');
}*/

public function store(Request $request)
{
    // Validate the form data
   /* $validatedData = $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'email_address' => 'required|email',
        'address' => 'required',
        'contact_number' => 'required',
        'province' => 'required',
        'city' => 'required',
        'birthday_month' => 'required',
        'birthday_day' => 'required',
        'birthday_year' => 'required',
    ]);*/

    // Extract the birthday month, day, and year from the validated data
    $birthdayMonth = $validatedData['birthday_month'];
    $day = $validatedData['birthday_day'];
    $year = $validatedData['birthday_year'];

    // Create a new ShowUserProfile instance
    $showUserProfile = new ShowUserProfile();
    $showUserProfile->first_name = $validatedData['first_name'];
    $showUserProfile->last_name = $validatedData['last_name'];
    $showUserProfile->email_address = $validatedData['email_address'];
    $showUserProfile->address = $validatedData['address'];
    $showUserProfile->contact_number = $validatedData['contact_number'];
    $showUserProfile->province = $validatedData['province'];
    $showUserProfile->city = $validatedData['city'];
    $showUserProfile->birthday_month = $birthdayMonth;
    $showUserProfile->birthday_day = $day;
    $showUserProfile->birthday_year = $year;


    // Save the ShowUserProfile to the database
    $showUserProfile->save();

    // Optionally, you can perform additional actions or redirect to another page
    // For example:
    return redirect()->route('showuserprofile', ['id' => $showUserProfile->id]);
    //return redirect()->route('success');

    /*
    // Save the ShowUserProfile to the database
$saved = $showUserProfile->save();

if (!$saved) {
    // Display an error message or log the error
    return redirect()->back()->with('error', 'Failed to save the user profile.');
}

// Optionally, you can perform additional actions or redirect to another page
// For example:
// return redirect()->route('showuserprofile', ['id' => $showUserProfile->id]);
return redirect()->route('success');
*/

}




}
