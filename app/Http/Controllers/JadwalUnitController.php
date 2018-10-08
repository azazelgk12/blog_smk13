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
    public function create(Request $request)
    {
        // $this->validate($request,[
        // 'tanggal' => 'required',
        // 'waktu' => 'required',
        // 'nm_kdd' => 'required',
        // 'alamat' => 'required',
        // 'nm_tempat' => 'required',
        // 'target' => 'required',
        // ]);
        // $request = Stokdarah::create($request);
        // $request->wb = $r ->wb  ;
        // $request->tc = $r->tc  ;
        // $request->prc = $r->prc ;
        // $request->ffp = $r->ffp ;
        // $request->ahf  = $r->ahf ;
        // $request->bc = $r->bc ;
        // $request->lp = $r->lp ;
        // $request->save();
        // return redirect('jadwal_mobilunit')->with('sukses','Data berhasil di tambah');
              // $jadwal= Jadwal::create($request);
        return view('tambah_jadwal')->with('jadwal' , '$jadwal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        // 'tanggal' => 'required',
        // 'waktu' => 'required',
        // 'nm_kdd' => 'required',
        // 'alamat' => 'required',
        // 'nm_tempat' => 'required',
        // 'target' => 'required',
        // ]);
        
        // $jadwal = Jadwal::create(['tanggal' => $request->tanggal,'waktu' => $request->waktu, 'nm_kdd' => $request->nm_kdd,'alamat' => $request->alamat,'nm_tempat' => $request->nm_tempat,'target' => $request->target,]);
        // return redirect('tambah_jadwal');
        // return view('tambah_jadwal')->with('jadwal' ,$jadwal);   
        // return redirect('jadwal_mobilunit')->with('sukses','Data berhasil di tambah');
        
        
       $rules = [
                'tanggal'       => 'required|date|date_format:Y-m-d',
                'waktu'         => 'required|max:20',
                'id_kdd'        => 'required|max:20',
                'alamat'        => 'required|max:20',
                'id_tempat'        => 'required|max:20',
                'target'        => 'required|max:20',
        ];
        $message = [
            'tanggal.required'        => 'Tanggal tidak boleh kosong',
            'tanggal.date'             => 'Inputan Bukan Tanggal',
            'tanggal.date_format'     => 'Format Tanggal salah',
            'waktu.required'           => 'Waktu Tidak boleh kosong',
            'waktu.max'                 =>"Waktu terlalu panjang",
            'id_kdd.required'           =>'Nama KDD tidak boleh kosong',
            'id_kdd.max'               =>'Nama KDD terlalu panjang',
            'alamat.max'             =>'Alamat KDD terlalu panjang',
            'alamat.required'         =>'Alamat KDD Tidak Boleh kosong',
            'id_tempat.max'             =>'Nama Tempat terlalu panjang',
            'id_tempat.required'     =>'Nama Tempat Tidak Boleh Kosong',
            'target.max'             =>'Target terlalu panjang',
            'target.required'             =>'Target Tidak Boleh Kosong',

        ];
        $validator = Validator::make($request->all(),$rules,$message);


        if ($validator->fails()) {

           return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }
        $jadwal = Jadwal::create($data);
        // $update = Kdd::find($id);
        // $update = Jadwal::find($id);
        $data->tanggal = $request->tanggal;
        $data->waktu = $request->waktu;
        $data->alamat = $request->alamat;
        $data->id_tempat = $request->id_tempat;
        $data->id_kdd = $request->id_kdd;
        $data->target = $request->target;
        $data->save();

        return redirect('tambah_jadwal')->with('sukses','Data berhasil di ditambah');
        $data = [
            'tanggal'        => $request->tanggal,
            'waktu'          => $request->waktu,
            'id_kdd'        => $request->id_kddd,
            'alamat'         => $request->alamat,
            'id_tempat'         => $request->id_tempat,
            'target'         => $request->target,
            // 'created_at'    => date("Y-m-d H:i:s"),
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
    public function edit(Request $jadwal , $id)
    {
    
      $jadwal=DB::table('jadwal_mobil_unit')
                ->join('kdd','jadwal_mobil_unit.id_kdd','=','kdd.id_kdd')
                ->join('tempat','tempat.id_tempat','=','tempat.id_tempat')
                ->select('jadwal_mobil_unit.*','kdd.*','tempat.*')
                ->first();

        // $jadwal = Jadwal::find($id);
        // print_r($jadwal);exit;
        // if (is_array($jad) || is_object($jad))
        // {

        // foreach($jad as $jadwal)
        // {
        //  $jadwal=['id_kdd'];
        //  $jadwal=['id_tempat'];
        //  $jadwal=['nm_kdd'];
        //  $jadwal=['nm_tempat'];
        //  $jadwal=['tanggal'];
        //  $jadwal=['waktu'];
        //  $jadwal=['target'];
        //  $jadwal=['tanggal'];
        return view('edit_mobilunit')->with('jadwal',$jadwal);
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
        $update->nm_kdd =$request->nm_kdd;
        $update->alamat = $request->alamat;
        $update->nm_tempat = $request->nm_tempat;
        $update->target = $request->target;
        $update->save();

        return redirect('edit_mobilunit/'.$id.'edit')->with('sukses','Data berhasil di update');
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


    

