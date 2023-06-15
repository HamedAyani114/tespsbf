<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// include model anggota
use App\Models\Anggota;
use App\Models\Properti;

class PropertiController extends Controller
{
    public function hello()
    {
        // return 'hello world';
    }

    public function hw()
    {
        
        // // return 'hello world';
        // $hw = 'hello world';
        // return view('anggota.helloworld',  ['hw' => $hw]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // panggil model PROPERTI
        $properti = Properti::all();
        // tampilkan view anggota
        return view('properti.index', ['properti' => $properti]);

        // panggil model anggota
        // $anggota = Anggota::all();
        // // tampilkan view anggota

        // return view('anggota.index', ['anggota' => $anggota]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create function
        // return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //


    }
}
