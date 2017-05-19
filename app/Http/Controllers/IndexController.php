<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Model\User;

class IndexController extends Controller
{
    public function index() {
        //$pdo = DB::connection()->GetPdo();
        //dd($pdo);
//        $users = DB::table('user')->where('user_id','>' ,'1')->get();
//        
//        dd($users);

//        $user = User::where('user_id',15)->get();
//        dd($user);
        
        $user = User::find(15);
        $user->user_name = '西門夜說';
        $user->update();
        dd($user);
        
         return view('welcome');
        
    }
}
