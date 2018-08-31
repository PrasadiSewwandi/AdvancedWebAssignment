<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->middleware('admin');
       
        $this->user = $user;
    }

    public function index(){
        return view('admin');
    }

    public function user(){
        $users = $this->user->all();
         return view('admin')->with(["users"=>$users]);
    }

    public function destroy($id){    
        $users = $this->user->where('id',$id)->delete();
        $users = $this->user->all();
         return view('admin')->with(["users"=>$users]);
    }

    public function updateAdmin($id,$role){    
        $user = $this->user->where('id',$id)->first();
        if($role=='yes'){
            $user->is_admin=1;
        }else{
            $user->is_admin=0;
        }
        $user->save();
        $user = $this->user->all();
         return view('admin')->with(["users"=>$user]);
    }
}
