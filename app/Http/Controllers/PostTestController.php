<?php

namespace App\Http\Controllers;

use App\Models\PostTest;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostTestController extends Controller
{
    public function index() : View
    {
        //get all products
        
        $postTests = PostTest::latest()->paginate(10);
        
        //render view with products
        return view('\end', compact('postTests'));
    }
    
    public function create(): View
    {
        return view('postTest.create', compact('user_id'));
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'name' => 'required|string',
            'kode_berita' => 'required|string',
            'manipulation1' => 'required|string',
            'manipulation2'=> 'required|string',
            'manipulation3'=> 'required|string',
            'manipulation4'=> 'required|string',
            'manipulation5'=> 'required|string',
            'manipulation6'=> 'required|string',
            'manipulation7'=> 'required|string',
            'manipulation8'=> 'required|string',
            'post1'=> 'required|string',
            'post2'=> 'required|string',
            'post3'=> 'required|string',
            'post4'=> 'required|string',
            'post5'=> 'required|string',
            'post6'=> 'required|string',
            'post7'=> 'required|string',
            'post8'=> 'required|string',
            'post9'=> 'required|string',
            'post10'=> 'required|string',
            'post11'=> 'required|string',
            'post12'=> 'required|string',
            'post13'=> 'required|string',
            'post14'=> 'required|string',
            'post15'=> 'required|string',
            'post16'=> 'required|string',
            'post17'=> 'required|string',
            'post18'=> 'required|string',
            'post19'=> 'required|string',
            'post20'=> 'required|string',
            'post21'=> 'required|string',
            'post22'=> 'required|string',
            'post23'=> 'required|string',
            'post24'=> 'required|string',
            'post25'=> 'required|string',
            'post26'=> 'required|string',
            'post27'=> 'required|string',
            'post28'=> 'required|string',
            'post29'=> 'required|string',
            'post30'=> 'required|string',
            'post31'=> 'required|string',
            'post32'=> 'required|string',
            'post33'=> 'required|string',
            'post34'=> 'required|string',
            'post35'=> 'required|string',
            'post36'=> 'required|string',
        ]);

        //create product
        PostTest::create([
            'name' => $request->name,
            'kode_berita' => $request->kode_berita,
            'manipulation1'=> $request->manipulation1,
            'manipulation2'=> $request->manipulation2,
            'manipulation3'=> $request->manipulation3,
            'manipulation4'=> $request->manipulation4,
            'manipulation5'=> $request->manipulation5,
            'manipulation6'=> $request->manipulation6,
            'manipulation7'=> $request->manipulation7,
            'manipulation8'=> $request->manipulation8,
            'post1'=> $request->post1,
            'post2'=> $request->post2,
            'post3'=> $request->post3,
            'post4'=> $request->post4,
            'post5'=> $request->post5,
            'post6'=> $request->post6,
            'post7'=> $request->post7,
            'post8'=> $request->post8,
            'post9'=> $request->post9,
            'post10'=> $request->post10,
            'post11'=> $request->post11,
            'post12'=> $request->post12,
            'post13'=> $request->post13,
            'post14'=> $request->post14,
            'post15'=> $request->post15,
            'post16'=> $request->post16,
            'post17'=> $request->post17,
            'post18'=> $request->post18,
            'post19'=> $request->post19,
            'post20'=> $request->post20,
            'post21'=> $request->post21,
            'post22'=> $request->post22,
            'post23'=> $request->post23,
            'post24'=> $request->post24,
            'post25'=> $request->post25,
            'post26'=> $request->post26,
            'post27'=> $request->post27,
            'post28'=> $request->post28,
            'post29'=> $request->post29,
            'post30'=> $request->post30,
            'post31'=> $request->post31,
            'post32'=> $request->post32,
            'post33'=> $request->post33,
            'post34'=> $request->post34,
            'post35'=> $request->post35,
            'post36'=> $request->post36,
        ]);
        
        return redirect()->route('postTest.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
