<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Auth;
use Hash;

class UserController extends Controller
{
    public function update(Request $req){
    	if($req->file('img_profile')){
            $image = $req->file('img_profile');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $destination = public_path('img/user');
=======

class UserController extends Controller
{
    public function update(){
    	if($req->file('img_profile')){
            $image = $req->file('img_profile');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $destination = public_path('img/users');
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
            $image->move($destination, $filename);
            $req->img_profile = $filename;
            Auth::user()->update([
                'name' => $req['name'],
                'email' => $req['email'],
                'img_profile' => $filename, 
                'gender' => $req["gender"], 
                'birthday' => $req["birthday"], 
                'address' => $req["address"]
            ]);
        } else {
            Auth::user()->update($req->all());
        }
        
        return redirect('/profile')->with('success', 'Profil berhasil diupdate');
    }
<<<<<<< HEAD

    public function changePassword(Request $req){
        $this->validate($req, [
            'old_password' => 'required',
            'new_password' => 'required'
        ]);

        if(Hash::check($req->old_password, Auth::user()->password)){
            Auth::user()->password = Hash::make($req->new_password);
            Auth::user()->update();
            return redirect('/change_password')->with('success', 'Password berhasil diganti');
        }

        return redirect()->back()->with('error', 'Password lama tidak cocok');
    }
=======
>>>>>>> d864338e1c0a59fc61fa335e948029ff795a9fc1
}
