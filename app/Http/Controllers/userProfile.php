<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class userProfile extends Controller
{

    public function show(){
        $userID = Auth::id();
        $userData = User::find($userID);
        $userDataProfile = Profile::where('user_id', $userID)->first();
        $cars = DB::table('cars')->orderBy('marka', 'asc')->get();

        return view('userProfile', [
                                    "userData"=>$userData,
                                    "userDataProfile"=>$userDataProfile,
                                    "cars"=>$cars]);
    }

    public function update(Request $data){

        $userID = Auth::id();

        $validated = $data->validate([
            'userName' => 'required|string',
            'userSurname' => 'required|string',
            'userPhone' => 'required|numeric',
            'userTown' => 'string',
            'userStreet' => 'string',
            'userHouseNumber' => 'string',
            'userZip' => 'string',
        ]);


        $userDataTableUsers = User::updateOrCreate([
            'id' => $userID,
        ],[
            'name' => $data->input('userName'),
            'surname' => $data->input('userSurname'),
            'phone_number' => $data->input('userPhone'),
        ]);

        //update user profiles table
        $userDataTableProfiles = Profile::updateOrCreate([
            'user_id' => $userID,
        ],[
            'car_id' => $data->input('userCar'),
            'town' => $data->input('userTown'),
            'street' => $data->input('userStreet'),
            'houseNumber' => $data->input('userHouseNumber'),
            'zipcode' => $data->input('userZip'),
        ]);



        return redirect()->route('profile');
    }
    

}
