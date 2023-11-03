<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class DashbordController extends Controller
{
    public function logincontrole()
    {

        $user=auth()->user();
        // dd($user);
        try{
           
            switch ($user) {
                case $user->hasRole('admin'):
                    return redirect()->route('admin');
                    break;
                default:
                Auth::logout();
                return back();
            }
       
        }catch(Exception $e){
            Auth::logout();
            return back();
               
            }
 }
}
