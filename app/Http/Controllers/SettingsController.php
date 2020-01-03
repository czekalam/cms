<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class SettingsController extends Controller
{
    public function edit()
    {
        $user = User::all()[0];
        return view('settings',compact('user'));
    }
    public function update()
    {
        $user = User::all()[0];
        $data = request()->validate([
            'username' => 'required',
            'email' =>'required',
            'password' =>  'required'
        ]);
        $data['password']=Hash::make($data['password']);
        $user->update($data);
    }
}
