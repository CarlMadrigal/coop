<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Upload;
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
            $coop = User::where('role', 'coop_head')->get();
            $user = Auth::user()->cooperative->users()->where('role', 'user')->get();
            $notif = Notification::orderBy('created_at', 'desc')->get();
            return view('dashboard',[
                'carabaos' => $carabao,
                'users' => $user,
                'coops' => $coop,
                'notifs' => $notif
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
        $files = Auth::user()->cooperative->uploads()->orderBy('created_at', 'desc')->get();
        $coop_id = Auth::user()->cooperative_id;
        return view('files_container', [
            'files' => $files,
            'coop_id' => $coop_id
        ]);
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

    function redirectToUploadMaterialspage(Request $request) {
        return view('upload_materials');
    }
}
