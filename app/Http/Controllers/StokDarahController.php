<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Stokdarah;
// use Illuminate\Support\Facades\DB;
// use DB;
use Validator;
class StokDarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
             $stokd = Stokdarah::all();
            return view('stokdarah')->with('stokd',$stokd);
    }   

    /**
     * Show the form for creating a new resource.
     *
        * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
//          $this->validate($request,[
//         'wb' => 'required',
//         'tc' => 'required',
//         'prc' => 'required',
//         'ffp' => 'required',
//         'ahf' => 'required',
//         'bc' => 'required',
//         'lp' => 'required',
//         ]);
//         if($validator->fails()) {
//                 return redirect()
//                 ->back()
//                 ->withErrors($validator->errors());

//     }
// }

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
        // echo "string";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $stokd= Stokdarah::findOrFail($id);
        // echo "string";
        // // echo response()->json($stokdarah);
        return view('edit_stokdarah')->with('stokd',$stokd);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {

        $this->validate($r,[
        'wb' => 'required',
        'tc' => 'required',
        'prc' => 'required',
        'ffp' => 'required',
        'ahf' => 'required',
        'bc' => 'required',
        'lp' => 'required',
        ]);
        $stokd = Stokdarah::find($id);
        $stokd->wb = $r ->wb  ;
        $stokd->tc = $r->tc  ;
        $stokd->prc = $r->prc ;
        $stokd->ffp = $r->ffp ;
        $stokd->ahf  = $r->ahf ;
        $stokd->bc = $r->bc ;
        $stokd->lp = $r->lp ;
        $stokd->save();
        
        
        return redirect('stokdarah')->with('sukses','Data berhasil di update');
        
        
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




// if($validate->fails()) {
        //         return redirect()
        //         ->back()
        //         ->withErrors($validator->errors());

 
      // $stokd = Stokdarah::find($id);
      //   $stokd->wb = $r->wb  ;
      //   $stokd->tc = $r->tc  ;
      //   $stokd->prc = $r->prc ;
      //   $stokd->ffp = $r->ffp ;
      //   $stokd->ahf  = $r->ahf ;
      //   $stokd->bc = $r->bc ;
      //   $stokd->lp = $r->lp ;
      //   $stokd->save();


 // $validator = Validator::make(request()->all(), [
 //            'wb'  => 'required|null',
 //            'tc' => 'required|null',
 //            'prc' => 'required|null',
 //            'ffp' => 'required|null',
 //            'ahf' => 'required|null',
 //            'bc' => 'required|null',
 //            'lp' => 'required|null',
 //        ]);
        

 //        if($validator->fails()) {
 //                return redirect()
 //                ->back()
 //                ->withErrors($validator->errors());
       
 //            }
 //         else
 //            {       
 //            $stokd = DB::table('stok_darah')
 //                     ->where([['wb','=',$wb],['tc','=',$tc],['prc','=',$prc],['ffp','=',$ffp],['ahf','=',$ahf],['bc','=',$lp],['tc','=',$tc],['tc','=',$tc]])
 //                     ->count();
 //                if($stokd == 1)
 //                    {

                //     }
                // else
                //     {
 //                                return redirect('/edit_stokdarah')->with('msg','harus diisi');
 //                    }
        // $stokd->wb = $r->wb  ;
        // $stokd->tc = $r->tc  ;
        // $stokd->prc = $r->prc ;
        // $stokd->ffp = $r->ffp ;
        // $stokd->ahf  = $r->ahf ;
        // $stokd->bc = $r->bc ;
        // $stokd->lp = $r->lp ;
        // $stokd->save();
        