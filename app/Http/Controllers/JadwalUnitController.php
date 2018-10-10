<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Jadwal;
use App\Tempat;
use App\Kdd;
// use App\Stokdarah;
use Validator;


class JadwalUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();
         
       $jadwal=DB::table('jadwal_mobil_unit')
                ->join('kdd','jadwal_mobil_unit.id_kdd','=','kdd.id_kdd')
                ->join('tempat','tempat.id_tempat','=','tempat.id_tempat')
                ->select('jadwal_mobil_unit.*','kdd.*','tempat.*')
                ->get();

                // print_r($jadwal);
                // dd($jadwaladwal);exit;
                // dd(DB::getQueryLog());

            return view('jadwal_mobilunit')->with('jadwal',$jadwal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'kdd' => Kdd::all(),
            'tempat'    => Tempat::all(),
        ];
        return view('tambah_jadwal')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        
       $rules = [
                'tanggal'       => 'required',
                'waktu'         => 'required|max:20',
                'id_kdd'        => 'required|max:20',
                'alamat'        => 'required|max:20',
                'id_tempat'     => 'required|max:20',
                'target'        => 'required|integer',
        ];

        $message = [
            'tanggal.required'      =>'Tanggal tidak boleh kosong',
            'tanggal.date'          =>'Inputan Bukan Tanggal',
            'tanggal.date_format'   =>'Format Tanggal salah',
            'waktu.required'        =>'Waktu Tidak boleh kosong',
            'waktu.max'             =>"Waktu terlalu panjang",
            'id_kdd.required'       =>'Nama KDD tidak boleh kosong',
            'id_kdd.max'            =>'Nama KDD terlalu panjang',
            'alamat.max'            =>'Alamat KDD terlalu panjang',
            'alamat.required'       =>'Alamat KDD Tidak Boleh kosong',
            'id_tempat.max'         =>'Nama Tempat terlalu panjang',
            'id_tempat.required'    =>'Nama Tempat Tidak Boleh Kosong',
            'target.max'            =>'Target terlalu panjang',
            'target.required'       =>'Target Tidak Boleh Kosong',
            'target.integer'        =>'Target harus berupa angka',

        ];
        $validator = Validator::make($request->all(),$rules,$message);

        // $validation = $validator->messages();
        // print_r($validation->all());exit;

        if ($validator->fails())
            {

               return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
        else
            {

                $data = [
                    'tanggal'        => $request->tanggal,
                    'waktu'          => $request->waktu,
                    'id_kdd'         => $request->id_kdd,
                    'alamat'         => $request->alamat,
                    'id_tempat'      => $request->id_tempat,
                    'target'         => $request->target,
                    
                ];

                $input = Jadwal::create($data);

                if($input)
                    {
                       return redirect()->back()->with('sukses','Data Berhasil Ditambahkan');
                    }
                else
                    {
                        return redirect()->back()->with('gagal','Data Gagal Ditambahkan');
                    }
            }
     

      


    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $jadwal = Jadwal::findOrFail($id)->get();
        $jadwal=DB::table('jadwal_mobil_unit')
                ->join('kdd','jadwal_mobil_unit.id_kdd','=','kdd.id_kdd')
                ->join('tempat','tempat.id_tempat','=','tempat.id_tempat')
                ->select('jadwal_mobil_unit.*','kdd.*','tempat.*')
                ->first();


        return view('jadwal_mobilunit')->with('jadwal',$jadwal);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
      $jadwal=DB::table('jadwal_mobil_unit')
                ->join('kdd','jadwal_mobil_unit.id_kdd','=','kdd.id_kdd')
                ->join('tempat','tempat.id_tempat','=','tempat.id_tempat')
                ->select('jadwal_mobil_unit.*','kdd.*','tempat.*')
                ->first();

      

        $data = [
            'jadwal'    => Jadwal::find($id),
            'kdd'       => Kdd::all(),
            'tempat'    => Tempat::all(),

        ];
      
        
            return view('edit_mobilunit')->with($data);
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
                  // $this->validate($r,[
                //   $jadwal=DB::table('jadwal_mobil_unit')
                // ->join('kdd','jadwal_mobil_unit.id_kdd','=','kdd.id_kdd')
                // ->join('tempat','tempat.id_tempat','=','tempat.id_tempat')
                // ->select('jadwal_mobil_unit.*','kdd.*','tempat.*')
                // ->first();
              // $jadwal=DB::statement('jadwal_mobil_unit')
              // ->join('kdd','jadwal_mobil_unit.id_kdd','=','kdd.id_kdd')
              // ->join('tempat','tempat.id_tempat','=','tempat.id_tempat')
              // ->select('jadwal_mobil_unit.*','kdd.*','tempat.*')
              // ->first();
        $rules = [
                'tanggal'      => 'required|date|date_format:Y-m-d',
                'waktu'        => 'required|max:20',
                'nm_kdd'   => 'required|max:20',
                'alamat'=> 'required|max:50',
                'nm_tempat'=> 'required|max:50',
        ];
        $message = [
            'tanggal.required'            => 'Tanggal tidak boleh kosong',
            'tanggal.date'               => 'Inputan Bukan Tanggal',
            'tanggal.date_format'       => 'Format Tanggal salah',
            'waktu.required'            => 'Waktu Tidak boleh kosong',
            'waktu.max'                 =>"Waktu terlalu panjang",
            'id_kdd.required'           =>'Nama KDD tidak boleh kosong',
            'id_kdd.max'               =>'Nama KDD terlalu panjang',
            'alamat.max'             =>'Alamat KDD terlalu panjang',
            'alamat.required'         =>'Alamat KDD Tidak Boleh kosong',
            'id_tempat.max'             =>'Nama Tempat terlalu panjang',
            'id_tempat.required'     =>'Nama Tempat Tidak Boleh Kosong',
            'target.max'             =>'Target terlalu panjang',
            'target.required'             =>'Target Tidak Boleh Kosong',
            'nm_kdd.max'             =>'nama kdd terlalu panjang',
            'nm_kdd.required'             =>'nama kdd Tidak Boleh Kosong',

        ];

        $validator = Validator::make($request->all(),$rules,$message);


        if ($validator->fails()) {

           return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        

        $update = Jadwal::find($id);
        // $update = Kdd::find($id);
        // $update = Jadwal::find($id);
        $update->tanggal = $request->tanggal;
        $update->waktu = $request->waktu;
        $update->id_kdd =$request->nm_kdd;
        $update->alamat = $request->alamat;
        $update->id_tempat = $request->nm_tempat;
        $update->target = $request->target;
        $update->save();

        return redirect('jadwal_mobilunit/'.$id.'/edit')->with('sukses','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);
        // $jadwal = Tempat::find($id);
        // $jadwal = Kdd::find($id);

        if($jadwal)
            {
                $hapus = $jadwal->delete($id);
                if($hapus)
                    {
                        return redirect()->back()->with('sukses','Jadwal berhasil di hapus!');
                    }
                else
                    {
                        return redirect()->back()->with('sukses','Jadwal berhasil di hapus!');
                    }
                
            }
        else
            {
                return redirect()->back()->with('gagal','Jadwal gagal dihapus!');
            }
    }

   
    }


    

