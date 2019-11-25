<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AttempController extends Controller
{
    public function decrease(){
        $users=User::all();
        foreach ($users as $user)
        {
            $user->attemps-=1;
            $user->save();
        }
        return view('admin.panel.users' , compact('users'));
    }
    public function increase(){
        $users=User::all();
        foreach ($users as $user)
        {
            $user->attemps+=1;
            $user->save();
        }
        return view('admin.panel.users' , compact('users'));
    }
    public function increase_by_id($id){
        $user=User::findOrFail($id);
        $user->attemps+=1;
        $user->save();
        $users=User::all();
        return view('admin.panel.users' , compact('users'));
    }
    public function decrease_by_id($id){
        $user=User::findOrFail($id);
        $user->attemps-=1;
        $user->save();
        $users=User::all();
        return view('admin.panel.users' , compact('users'));
    }
}
