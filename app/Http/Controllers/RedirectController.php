<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Carabao;
use App\Models\Cooperative;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    function redirectToHomepage(Request $request) {
        if(Auth::check()){
            $carabao = Auth::user()->cooperative->carabaos;
            $user = Auth::user()->cooperative->users()->where('role', 'user')->get();
            return view('dashboard',[
                'carabaos' => $carabao,
                'users' => $user
            ]);
        }       
        return view('login');
    }
    
    function redirectToNotificationpage(Request $request) {
        $notif = Auth::user()->cooperative->notifications()->orderBy('created_at', 'desc')->get();
        return view('notification', [
            'notifs' => $notif
        ]);
    }
    
    function redirectToCarabaospage(Request $request) {
        $carabao = Auth::user()->cooperative->carabaos;
        return view('carabaos',[
            'carabaos' => $carabao
        ]);
    }

    function redirectToUserspage(Request $request) {
        $user = Auth::user()->cooperative->users()->where('role', 'user')->get();
        return view('users',[
            'users' => $user
        ]);
    }
    
    function redirectToLearningMaterialpage(Request $request) {
        return view('learning_material');
    }

    function redirectToLearningAnalyticspage(Request $request) {
        $carabao = Auth::user()->cooperative->carabaos;
        $user = Auth::user()->cooperative->users()->where('role', 'user')->get();
        return view('analytics',[
            'carabaos' => $carabao,
            'users' => $user
        ]);
    }
    
    function redirectToRegisterCarabaopage(Request $request) {
        $user = Auth::user()->cooperative->users()->where('role', 'user')->get();
        return view('register_carabao', [
            'users' => $user
        ]);
    }
}
