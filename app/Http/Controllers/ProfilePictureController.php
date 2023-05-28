<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class ProfilePictureController extends Controller
{
    public function upload(Request $request)
{
    $request->validate([
        'profile_picture' => 'required|image|max:2048', // Validate the uploaded image
    ]);

    // Handle the uploaded image
    if ($request->hasFile('profile_picture')) {
        $image = $request->file('profile_picture');
        $imageName = Str::random(40) . '.' . $image->getClientOriginalExtension();

        // Store the image in the desired location
        $image->storeAs('public/profile_pictures', $imageName);

        // Update the user's profile picture column in the database
        $user = Auth::user();
        //$user->name = $request->input('full_name');
        //$user->email = $request->input('email');
        $user->profile_picture = $imageName;
        $user->save();

          // Redirect to the "showuserprofile" blade with the user's profile ID

          return Redirect::route('showuserprofile', ['id' => $user->id]);

        }

    return redirect()->back()->with('error', 'Failed to upload profile picture.');
}

public function __construct()
{
    $this->middleware('auth');
}

public function showUserProfile($id)
{
    // Retrieve the user with the given ID
    $user = User::findOrFail($id);

    // Pass the user object to the view
    return view('showuserprofile', compact('user'));
}


}
