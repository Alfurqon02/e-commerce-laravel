<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNotificationController extends Controller
{
    public function index(){
        return view('menu-admin.user-settings.notifications.index');
    }
}
