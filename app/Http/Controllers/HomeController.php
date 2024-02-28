<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewData()
    {
        $userModel = UserModel::all();

        return view('view', ['userModel' => $userModel]);
    }
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


        return redirect('/view');
    }

    public function getID($id)
    {
        $userModel = UserModel::where('id', $id)->first();
        return view('delete', ['userModel' => $userModel]);
    }
    public function submitDelete(Request $request)
    {
        $id = $request->input('id');
        if ($request->input('delete') == 'Yes,Delete it') {
            UserModel::where('id', $id)->delete();
            return redirect('/view');
        } else {
            return redirect('/view');
        }
    }
}
