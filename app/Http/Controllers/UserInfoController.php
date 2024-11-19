<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class UserInfoController extends Controller
{   

    public function index() : View
    {
        // $user = Auth::user();

        // // Access user properties
        // $userId = $user->name;
        //get all products
        $usersInfo = UserInfo::latest()->paginate(10);

        //render view with products
        return view('\index', compact('usersInfo'));
    }

    public function create(): View
    {
        return view('userInfo.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'age' => 'required|integer',
            'location' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'education' => 'required|string|max:255',
            'income' => 'required|string',
        ]);

        $user = UserInfo::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'location' => $request->location,
            'occupation' => $request->occupation,
            'education' => $request->education,
            'income' => $request->income,
        ]);

        // return response()->json(['success' => 'Data saved successfully']);
        // return redirect()->route('index.show', ['user_id' => $user->id]);
        return redirect()->route('userInfo.index', ['user_id' => $user->id])->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
