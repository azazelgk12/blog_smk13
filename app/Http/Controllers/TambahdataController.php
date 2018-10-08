<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Jadwal;
Use App\Tempat;
Use App\Kdd;
use Validator;

class TambahdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('tambah_jadwal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $request->validate([
        'tanggal' => 'required',
        'waktu' => 'required',
        'nm_kdd' => 'required',
        'alamat' => 'required',
        'nm_tempat' => 'required',
        'target' => 'required',
        ]);
        
        $jadwal = Jadwal::create(['tanggal' => $request->tanggal,'waktu' => $request->waktu, 'nm_kdd' => $request->nm_kdd,'alamat' => $request->alamat,'nm_tempat' => $request->nm_tempat,'target' => $request->target,]);
        return redirect('tambah_jadwal');
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
        //
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
        //
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
