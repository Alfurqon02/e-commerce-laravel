<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index(){
        return view('menu-admin.item-settings.category.index');
    }
}
