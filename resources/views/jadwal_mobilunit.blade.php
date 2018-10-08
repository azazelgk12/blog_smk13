@extends('template')

@section('css')

@endsection

@section('script')
<script type="text/javascript">
      function confirmdelete(){
          var del = confirm('Apakah anda akan menghapus data ini ?');

          if(del == true){
            return true;
          }
          else{
            return false;
          }
      }
  </script>
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
 <h1><span class="breadcrumb-item active">JADWAL MOBIL UNIT</span></h1>
<div class="col-md-12">
     @if (session('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}
            </div>
      @elseif(session('gagal'))
            <div class="alert alert-danger">
                {{ session('gagal') }}
            </div>

      @endif

              <thead class="bg-red">
                <tr>
                  <th class="text-center bg-red">No</th>
                  <th class="text-center bg-red">Tanggal</th>
                  <th class="text-center bg-red">Waktu</th>
                  <th class="text-center bg-red">Nama KDD</th>
                  <th class="text-center bg-red">Alamat</th>
                  <th class="text-center bg-red">Tempat</th>
                  <th class="text-center bg-red">Target</th>
                  <th class="text-center bg-red">Aksi</th>
                </tr>
              </thead>
              <tbody>
          			
          			  @php
                  $no = 1;
                  
                @endphp
                
                @foreach ($jadwal as $j)
                
                    @php
                        $tanggal = date_format(date_create($j->tanggal),"Y-m-d");
                    @endphp


					<td class="text-center">{{ $no++ }}</td>
                    <td class="text-center">{{ $tanggal }}</td>
                    <td class="text-center">{{ $j->waktu }}</td>
                    <td class="text-center ">{{ $j->nm_kdd }}</td>
                    <td class="text-center">{{ $j->alamat }}</td>
                    <td class="text-center">{{ $j->nm_tempat }}</td>
                    <td class="text-center">{{ $j->target }}</td>
                    <td class="text-center">
                         
                           {{-- <form action="{{ route('jadwal.destroy', $->id) }}" method="post"> --}}
                         {{-- <input type="hidden" name="_method" value="DELETE" /> --}}
                          {{-- <input type="submit"  value="Delete" name="Delete" id="btnExc"     --}}
                      {!! Form::open(['method'=>'DELETE','route'=>['jadwal_mobilunit.destroy',$j->id],'onsubmit'=>'return confirmdelete()','class'=>'col-md-12']) !!}
                             <a href="jadwal_mobilunit/{{ $j->id }}/edit" class="btn btn-sm btn-info col-md-5" title="Edit"><span class="fa fa-pencil"></span></a>
                            <button type="submit" class="btn btn-sm btn-danger col-md-5" title="Hapus"><span class="fa fa-trash"></span></button>
                      {!! Form::close() !!}
                          
                    </td>
                  </tr>
                @endforeach     
                              
                      
                           
                
              </tbody>
            </table>
          </div>

      </div>
  </div>
</table>
</div>
</div>
</div>
</div>




@endsection