@extends('template')

@section('css')

@endsection

@section('script')
  
@endsection

@section('content')
<div class="right_col" role="main">
    <div class="">
                  <div class="page-title">
                    <div class="title_left">
                     
                    </div>
<div class="x_content">
  <div class="clearfix"> </div>
<table id="datatable" class="table table-striped table-bordered">  
  <div class="table-responsive">
 <h1><span class="breadcrumb-item active">Stok Darah</span></h1> 
<thead class="">
                <tr class="headings">
                  <th rowspan="3" class="text-center rowspan-3 bg-red">Golongan Darah</th>
                  <th colspan="14" class="text-center bg-red">Komponen</th>
                </tr>
                <tr class="">
                  <td colspan="7" class="text-center bg-black-1" border="1px">Rhesus +</th>
                  <td colspan="7" class="text-center bg-black-1" border="1px solid black">Rhesus -</th>
                </tr>
                <tr>
                  <th class="text-center bg-crem-2">WB</th>
                  <th class="text-center bg-crem-2">TC</th>
                  <th class="text-center bg-crem-2">PRC</th>
                  <th class="text-center bg-crem-2">FFP</th>
                  <th class="text-center bg-crem-2">AHF</th>
                  <th class="text-center bg-crem-2">BC</th>
                  <th class="text-center bg-crem-2">LP</th>
                  <th class="text-center bg-crem-2">WB</th>
                  <th class="text-center bg-crem-2">TC</th>
                  <th class="text-center bg-crem-2">PRC</th>
                  <th class="text-center bg-crem-2">FFP</th>
                  <th class="text-center bg-crem-2">AHF</th>
                  <th class="text-center bg-crem-2">BC</th>
                  <th class="text-center bg-crem-2">LP</th>
                </tr>
                
              </thead>
              <tbody>
                
                <tr>
                    <td class="text-center">A</td>
                    @foreach($data['a_pos'] as $apos)                    
                      
                        <td class="text-center">{{ $apos->wb  }}</td>
                        <td class="text-center">{{ $apos->tc  }}</td>
                        <td class="text-center">{{ $apos->prc }}</td>
                        <td class="text-center">{{ $apos->ffp }}</td>
                        <td class="text-center">{{ $apos->ahf }}</td>
                        <td class="text-center">{{ $apos->bc  }}</td>
                        <td class="text-center">{{ $apos->lp  }}</td>
                    @endforeach

                    
                    @foreach($data['a_neg'] as $aneg )
                        <td class="text-center">{{ $aneg->wb  }}</td>
                        <td class="text-center">{{ $aneg->tc  }}</td>
                        <td class="text-center">{{ $aneg->prc }}</td>
                        <td class="text-center">{{ $aneg->ffp }}</td>
                        <td class="text-center">{{ $aneg->ahf }}</td>
                        <td class="text-center">{{ $aneg->bc  }}</td>
                        <td class="text-center">{{ $aneg->lp  }}</td>
                    @endforeach 
                      
                    
                </tr>
                
                <tr>
                    <td class="text-center">B</td>
                    
                    @foreach($data['b_pos'] as $bpos)
                        <td class="text-center">{{ $bpos->wb  }}</td>
                        <td class="text-center">{{ $bpos->tc  }}</td>
                        <td class="text-center">{{ $bpos->prc }}</td>
                        <td class="text-center">{{ $bpos->ffp }}</td>
                        <td class="text-center">{{ $bpos->ahf }}</td>
                        <td class="text-center">{{ $bpos->bc  }}</td>
                        <td class="text-center">{{ $bpos->lp  }}</td>
                    @endforeach
                      
                    
                        @foreach($data['b_neg'] as $bneg )
                        <td class="text-center">{{ $bneg->wb  }}</td>
                        <td class="text-center">{{ $bneg->tc  }}</td>
                        <td class="text-center">{{ $bneg->prc }}</td>
                        <td class="text-center">{{ $bneg->ffp }}</td>
                        <td class="text-center">{{ $bneg->ahf }}</td>
                        <td class="text-center">{{ $bneg->bc  }}</td>
                        <td class="text-center">{{ $bneg->lp  }}</td>
                    @endforeach   
                      
                    
                </tr>

                <tr>
                    <td class="text-center">AB</td>
                    
                    @foreach($data['ab_pos'] as $abpos)  
                        <td class="text-center">{{ $abpos->wb  }}</td>
                        <td class="text-center">{{ $abpos->tc  }}</td>
                        <td class="text-center">{{ $abpos->prc }}</td>
                        <td class="text-center">{{ $abpos->ffp }}</td>
                        <td class="text-center">{{ $abpos->ahf }}</td>
                        <td class="text-center">{{ $abpos->bc  }}</td>
                        <td class="text-center">{{ $abpos->lp  }}</td>
                    @endforeach   
                      

                      @foreach($data['ab_neg'] as $abneg)
                        <td class="text-center">{{ $abpos->wb  }}</td>
                        <td class="text-center">{{ $abpos->tc  }}</td>
                        <td class="text-center">{{ $abpos->prc }}</td>
                        <td class="text-center">{{ $abpos->ffp }}</td>
                        <td class="text-center">{{ $abpos->ahf }}</td>
                        <td class="text-center">{{ $abpos->bc  }}</td>
                        <td class="text-center">{{ $abpos->lp  }}</td>
                      @endforeach
                      
                    
                </tr>

                <tr>
                    <td class="text-center">O</td>
                    
                    
                    @foreach($data['o_pos'] as $opos)
                        <td class="text-center">{{ $opos->wb  }}</td>
                        <td class="text-center">{{ $opos->tc  }}</td>
                        <td class="text-center">{{ $opos->prc }}</td>
                        <td class="text-center">{{ $opos->ffp }}</td>
                        <td class="text-center">{{ $opos->ahf }}</td>
                        <td class="text-center">{{ $opos->bc  }}</td>
                        <td class="text-center">{{ $opos->lp  }}</td>
                    @endforeach
                      

                      @foreach($data['o_neg'] as $oneg)                          
                        <td class="text-center">{{$oneg->wb}}</td>
                        <td class="text-center">{{$oneg->tc}}</td>
                        <td class="text-center">{{$oneg->prc}}</td>
                        <td class="text-center">{{$oneg->ffp}}</td>
                        <td class="text-center">{{$oneg->ahf}}</td>
                        <td class="text-center">{{$oneg->bc}}</td>
                        <td class="text-center">{{$oneg->lp}}</td>
                      @endforeach
                      
                 
                </tr>
              </tbody>
            </table>
                <div class="col-md-12"><br></div>
              <div class="col-md-12">
                <p class="col-md-12 profil-pmi"><b>Catatan : </b><i>*Stok bisa berubah sewaktu waktu</i></p>
              </div>
                  
                <table id="datatable" class="table table-striped table-bordered">  
  <div class="table-responsive">
 <h1><span class="breadcrumb-item active">Jawal Mobil Unit</span></h1> 
<thead class=""> 
              
                <tr>
                  <th class="head1 sorting_asc bg-red" width="5%" rowspan="1" colspan="1" style=width: 20px;">No.</th>
                  <th class="text-center bg-red">Tanggal</th>
                  <th class="text-center bg-red">Waktu</th>
                  <th class="text-center bg-red">Nama KDD</th>
                  <th class="text-center bg-red ">Alamat</th>
                
                </tr>
              </thead>
              <tbody>

                  <tr>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                       
                      </tr>


              </tbody>
            </table>
          </div>
        </td>
      </td>
    </tr>
  </thead>
</table>
</div>
</div>
</div>
</div>


      
@endsection