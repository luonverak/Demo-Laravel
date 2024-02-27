<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('home');
    }
    public function addData(Request $request)
    {
        $name = $request->input('name');
        $gender = $request->input('gender');
        $age = $request->input('age');
        $profile = $request->file('profile');

        $fileName = rand(1, 10000) . '-' . $profile->getClientOriginalName();
        $profile->move('images', $fileName);

        $userModel = UserModel::create([
            'name' => $name,
            'gender' => $gender,
            'age' => $age,
            'profile' => $fileName
        ]);


        return redirect()->back();
    }
}
