<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Stokdarah;
use DB;
use Validator;
class KontenController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    // $data = Stokdarah::all();
    
    // return view('konten')->with('data',$data);




 
        //        $stok = Stokdarah::all();
        // return view('edit_stokdarah')->with('stok',$stok);
    
         // $tgl = date("Y-m-d");

            $data = [ 
                // 'jadwal_unit' => Jadwal::whereDate('created_at','=',$tgl)
                                        // ->get(),
                // stok darah   
                'a_pos'       => Stokdarah::where([
                                                'golongandarah'=> 'A',
                                                'rhesus'     => '+',
                                                // 'wb'=>'wb',   
                                                // 'tc'=>'tc',
                                                // 'prc'=>'prc',
                                                // 'ffp'=> 'ffp',
                                                // 'ahf'=>'ahf',
                                                // 'bc'=>'bc',
                                                // 'lp'=>'lp',
                                            ])
                                            ->get(),
                'b_pos'       => Stokdarah::where([
                                                'golongandarah'=> 'B',
                                                'rhesus'        => '+' ,
                                                // 'wb'=>'wb',   
                                                // 'tc'=>'tc',
                                                // 'prc'=>'prc',
                                                // 'ffp'=> 'ffp',
                                                // 'ahf'=>'ahf',
                                                // 'bc'=>'bc',
                                                // 'lp'=>'lp',
                                            ])
                                            ->get(),
                'ab_pos'       => Stokdarah::where([
                                                'golongandarah'=> 'AB',
                                                'rhesus'        => '+',
                                                // 'wb'=>'wb',   
                                                // 'tc'=>'tc',
                                                // 'prc'=>'prc',
                                                // 'ffp'=> 'ffp',
                                                // 'ahf'=>'ahf',
                                                // 'bc'=>'bc',
                                                // 'lp'=>'lp',
                                            ])
                                            ->get(),
                'o_pos'       => Stokdarah::where([
                                                'golongandarah'=> 'O',
                                                'rhesus'        => '+',
                                                // 'wb'=>'wb',   
                                                // 'tc'=>'tc',
                                                // 'prc'=>'prc',
                                                // 'ffp'=> 'ffp',
                                                // 'ahf'=>'ahf',
                                                // 'bc'=>'bc',
                                                // 'lp'=>'lp',
                                            ])
                                            ->get(),

                'a_neg'       => Stokdarah::where([
                                                'golongandarah'=> 'A',
                                                'rhesus'        => '-',
                                                // 'wb'=>'wb',   
                                                // 'tc'=>'tc',
                                                // 'prc'=>'prc',
                                                // 'ffp'=> 'ffp',
                                                // 'ahf'=>'ahf',
                                                // 'bc'=>'bc',
                                                // 'lp'=>'lp',
                                            ])
                                            ->get(),
                'b_neg'       => Stokdarah::where([
                                                'golongandarah'=> 'B',
                                                'rhesus'        => '-',
                                                // 'wb'=>'wb',   
                                                // 'tc'=>'tc',
                                                // 'prc'=>'prc',
                                                // 'ffp'=> 'ffp',
                                                // 'ahf'=>'ahf',
                                                // 'bc'=>'bc',
                                                // 'lp'=>'lp',
                                            ])
                                            ->get(),
                'ab_neg'       => Stokdarah::where([
                                                'golongandarah'=> 'AB',
                                                'rhesus'        => '-',
                                                // 'wb'=>'wb',   
                                                // 'tc'=>'tc',
                                                // 'prc'=>'prc',
                                                // 'ffp'=> 'ffp',
                                                // 'ahf'=>'ahf',
                                                // 'bc'=>'bc',
                                                // 'lp'=>'lp',
                                            ])
                                            ->get(),
                'o_neg'       => Stokdarah::where([
                                                'golongandarah'=> 'O',
                                                'rhesus'        => '-',
                                                // 'wb'=>'wb',   
                                                // 'tc'=>'tc',
                                                // 'prc'=>'prc',
                                                // 'ffp'=> 'ffp',
                                                // 'ahf'=>'ahf',
                                                // 'bc'=>'bc',
                                                // 'lp'=>'lp',
                                            ])
                                            ->get(),
            ];
            // dd($jadwal);
            return view('konten')->with('data',$data);
            // echo response()->json($data);

      }
        

   
    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //    return view('/login');
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
