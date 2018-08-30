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
        //$id= Auth::user()->id;
        $users = $this->user->all();
        // //return view("project.ideas")->with(["data"=>$project]);
         return view('admin')->with(["users"=>$users]);
    }
}
