<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function show($user_id):View
    {
        
        $user = UserInfo::findOrFail($user_id);
        return view('/index', compact('user'));
    }
}
