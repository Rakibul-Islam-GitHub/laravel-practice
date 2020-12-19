<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\createuserRequest;
use App\User;
class homeController extends Controller
{
    function index(Request $req){
        return view('home.index');

    }

    function createuser(){
        return view('home.create');

    }
    function userstore(createuserRequest $req){
        $req->validated();

        if($req->hasFile('myimg')){

        	$file = $req->file('myimg');
        	/*echo "File Name: ".$file->getClientOriginalName()."<br/>";
        	echo "File Extension: ".$file->getClientOriginalExtension()."<br/>";
        	echo "File Size: ".$file->getSize();*/

        	if($file->move('upload', $file->getClientOriginalName())){
        		
                $user = new User();
                $user->username     = $req->username;
                $user->password     = $req->password;
                $user->name         = $req->name;
                $user->dept         = $req->dept;
                $user->cgpa         = $req->cgpa;
                $user->type         = $req->type;
                $user->image  = $file->getClientOriginalName();

                if($user->save()){
                    return redirect()->route('home.index');
                }else{
                    return back();
                }

        	}else{
        		return back();
        	}
        }


    }
}
