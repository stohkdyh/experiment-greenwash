<?php

namespace App\Http\Controllers;

use App\Models\PreTest;
use App\Models\UserInfo;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PreTestController extends Controller
{
    public function index() : View
    {
        //get all products
        
        $preTests = PreTest::latest()->paginate(10);
        
        //render view with products
        return view('\select', compact('preTests'));
    }
    
    public function create(): View
    {
        return view('preTest.create', compact('user_id'));
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'name' => 'required|string',
            'kode_berita' => 'required|string',
            'pre1' => 'required|string',
            'pre2'=> 'required|string',
            'pre3'=> 'required|string',
            'pre4'=> 'required|string',
            'pre5'=> 'required|string',
            'pre6'=> 'required|string',
            'pre7'=> 'required|string',
            'pre8'=> 'required|string',
            'pre9'=> 'required|string',
            'pre10'=> 'required|string',
            'pre11'=> 'required|string',
            'pre12'=> 'required|string',
            'pre13'=> 'required|string',
            'pre14'=> 'required|string',
            'pre15'=> 'required|string',
            'pre16'=> 'required|string',
            'pre17'=> 'required|string',
            'pre18'=> 'required|string',
            'pre19'=> 'required|string',
            'pre20'=> 'required|string',
            'pre21'=> 'required|string',
            'pre22'=> 'required|string',
            'pre23'=> 'required|string',
            'pre24'=> 'required|string',
            'pre25'=> 'required|string',
            'pre26'=> 'required|string',
            'pre27'=> 'required|string',
            'pre28'=> 'required|string',
            'pre29'=> 'required|string',
            'pre30'=> 'required|string',
            'pre31'=> 'required|string',
            'pre32'=> 'required|string',
            'pre33'=> 'required|string',
            'pre34'=> 'required|string',
            'pre35'=> 'required|string',
            'pre36'=> 'required|string',
        ]);

        //create product
        PreTest::create([
            'name' => $request->name,
            'kode_berita' => $request->kode_berita,
            'pre1' => $request->pre1,
            'pre2'=> $request->pre2,
            'pre3'=> $request->pre3,
            'pre4'=> $request->pre4,
            'pre5'=> $request->pre5,
            'pre6'=> $request->pre6,
            'pre7'=> $request->pre7,
            'pre8'=> $request->pre8,
            'pre9'=> $request->pre9,
            'pre10'=> $request->pre10,
            'pre11'=> $request->pre11,
            'pre12'=> $request->pre12,
            'pre13'=> $request->pre13,
            'pre14'=> $request->pre14,
            'pre15'=> $request->pre15,
            'pre16'=> $request->pre16,
            'pre17'=> $request->pre17,
            'pre18'=> $request->pre18,
            'pre19'=> $request->pre19,
            'pre20'=> $request->pre20,
            'pre21'=> $request->pre21,
            'pre22'=> $request->pre22,
            'pre23'=> $request->pre23,
            'pre24'=> $request->pre24,
            'pre25'=> $request->pre25,
            'pre26'=> $request->pre26,
            'pre27'=> $request->pre27,
            'pre28'=> $request->pre28,
            'pre29'=> $request->pre29,
            'pre30'=> $request->pre30,
            'pre31'=> $request->pre31,
            'pre32'=> $request->pre32,
            'pre33'=> $request->pre33,
            'pre34'=> $request->pre34,
            'pre35'=> $request->pre35,
            'pre36'=> $request->pre36,
        ]);

        //redirect to index
        return redirect()->route('preTest.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
