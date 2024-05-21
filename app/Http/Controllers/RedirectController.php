<?php

namespace App\Http\Controllers;

use App\Models\Need;
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
            $milk = Need::where('cooperative_id', Auth::user()->cooperative_id)->sum('milk');
            $heathy = Carabao::where('status', 'Healthy')->get();
            $unheathy = Carabao::where('status', 'Sick')->get();
            $pregnant = Carabao::where('status', 'Pregnant')->get();
            $user = Auth::user()->cooperative->users()->where('role', 'user')->get();
            $notif = Auth::user()->cooperative->notifications()->orderBy('created_at', 'desc')->get();
            return view('dashboard',[
                'carabaos' => $carabao,
                'milks' => $milk,
                'healthy' => $heathy,
                'unhealthy' => $unheathy,
                'pregnant' => $pregnant,
                'users' => $user,
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
        $files = Upload::where('cooperative_id', Auth::user()->cooperative->id)->orWhere('cooperative_id', null)->orderBy('created_at', 'desc')->get();
        $coop_id = Auth::user()->cooperative_id;
        return view('files_container', [
            'files' => $files,
            'coop_id' => $coop_id
        ]);
    }

    function redirectToLearningAnalyticspage(Request $request) {
        $carabao = Auth::user()->cooperative->carabaos;
        $milk = Need::where('cooperative_id', Auth::user()->cooperative_id)->sum('milk');
        $heathy = Carabao::where('status', 'Healthy')->get();
        $unheathy = Carabao::where('status', 'Sick')->get();
        $pregnant = Carabao::where('status', 'Pregnant')->get();
        $user = Auth::user()->cooperative->users()->where('role', 'user')->get();
        return view('analytics',[
            'carabaos' => $carabao,
            'milk' => $milk,
            'healthy' => $heathy,
            'unhealthy' => $unheathy,
            'pregnant' => $pregnant,
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
