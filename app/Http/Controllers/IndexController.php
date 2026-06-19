<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function show($user_id):View
    {
        
        $user = User::findOrFail($user_id);
        return view('/index', compact('user'));
    }
}
