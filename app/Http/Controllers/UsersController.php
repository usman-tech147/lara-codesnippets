<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index()
    {
        $users = MyUser::all();
        return view('user.users',compact('users'));
    }
    public function create()
    {
        return view('user.user_profile');
    }
    public function store(Request $request)
    {
        $profile = new MyUser();
        $profile->name = $request->name;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $image->storeAs('images', $image_name, 'public');
            $profile->image = $image_name;
        }
        else {
            $profile->save();
            return "no file";
        }
        $profile->save();
        return "success";

    }
    public function edit($id)
    {
        $user = MyUser::find($id);
        return view('user.edit_user',compact('user'));
    }
    public function update($id)
    {
        $user = MyUser::find($id);
        Storage::delete('/public/images/'.$user->image);
        $user->image = null;
        $user->update();
        return $user;

    }
}
