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
            
            @if (session('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}
            </div>
        @endif
        
						<table class="table  table-responsive table-bordered table-stripped table-danger">
               			<thead class="bg-danger">
                 	   <tr>
                    	<th rowspan="2" class="text-center rowspan-2 bg-red">Golongan Darah</th>
                    	<th rowspan="2" class="text-center rowspan-2 bg-red">Rhesus</th>
                    	<th colspan="7" class="text-center bg-red">Komponen</th>
                   		<th rowspan="2" class="text-center rowspan-2 bg-red">Aksi</th>
                 		 </tr>
                  			<tr>

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


				@foreach($stokd as $s)
            <tr>
              <td class="text-center">{{ ucfirst($s->golongandarah) }}</td>
              <td class="text-center">{{ ucfirst($s->rhesus) }}</td>
              <td class="text-center">{{ $s->wb }}</td>
              <td class="text-center">{{ $s->tc }}</td>
              <td class="text-center">{{ $s->prc }}</td>
              <td class="text-center">{{ $s->ffp }}</td>
              <td class="text-center">{{ $s->ahf }}</td>
              <td class="text-center">{{ $s->bc }}</td>
              <td class="text-center">{{ $s->lp }}</td>
              <td class="text-center">
                        
                <a href="{{URL::to('stokdarah/'.$s->id.'/edit')}}" class="btn btn-info btn-xs" title="Edit"><span class="fa fa-pencil"></span></a>


              </td>
            </tr>
@endforeach
					</td>
						</tr>
							</tbody>
								</table>
									</div>
										</table>
											</div>
										</div>
                  	</div>
                  </div>


  


@endsection