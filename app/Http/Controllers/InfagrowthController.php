<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShowUserProfile;
use App\Http\Controllers\ShowUserProfileController;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Auth;
use App\Models\User;


class InfagrowthController extends Controller
{
    function index(){
        return view('infagrowth');
        }
}
