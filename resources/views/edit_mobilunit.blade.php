@extends('template')

@section('css')

@endsection

@section('script')
<script>
    $(document).ready(function(){
      $("#tanggal").datepicker({

        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
      });
    });
  </script>
@endsection

@section('content')


<div class="right_col" role="main">
    <div class="">
                  <div class="page-title">
                    <div class="title_left">
                     <h2>Edit jadwal mobil unit</h2>
                    </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate>

                      <span class="section">Personal Info</span>

                      
@if (session('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}
            </div>
      @elseif(session('gagal'))
            <div class="alert alert-danger">
                {{ session('gagal') }}
            </div>

      @endif
      


                
                   
            
                {!! Form::model($jadwal, ['method'=>"PATCH",'route'=>['jadwal_mobilunit.update',$jadwal->id]]) !!}
                {{-- {!! Form::open(["mehtod"=>"POST","route"=>"jadwal.store",'class'=>'form form-horizontal']) !!} --}}

                        <div class="row mg-t-20">
                              {!! Form::label("tanggal", "Tanggal", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                  {!! Form::date('tanggal',$jadwal->tanggal, ['id'=>'tanggal','class'=>'form-control','placeholder'=>'Tanggal',]) !!}

                                    @if ($errors->has('tanggal'))
                                        <span class="help-block">
                                            <strong class="error">{{ $errors->first('tanggal') }}</strong>
                                        </span>
                                    @endif

                              </div>
                        </div>
                            </br>
                         <div class="row mg-t-20">
                              {!! Form::label("waktu", "Waktu", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                  {!! Form::time('waktu', $jadwal->waktu, ['class'=>'form-control','placeholder'=>'Waktu Pelaksanaan']) !!}

                                  @if ($errors->has('waktu'))
                                        <span class="help-block">
                                            <strong class="error">{{ $errors->first('waktu') }}</strong>
                                        </span>
                                    @endif

                              </div>
                        </div>
                        </br>
                        <div class="row mg-t-20">
                              {!! Form::label("nm_kdd", "Nama KDD", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                  {!! Form::text('nm_kdd', $jadwal->nm_kdd, ['class'=>'form-control','placeholder'=>'Nama KDD']) !!}
                                  
                                   @if ($errors->has('nm_kdd'))
                                        <span class="help-block">
                                            <strong class="error">{{ $errors->first('nm_kdd') }}</strong>
                                        </span>
                                    @endif

                              </div>
                        </div>
                          </br>
                        
                        <div class="row mg-t-20">
                              {!! Form::label("alamat", "Alamat", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                 {!! Form::textarea('alamat', $jadwal->alamat, ['class'=>'form-control','rows'=>'3']) !!}

                                  @if ($errors->has('alamat'))
                                        <span class="help-block">
                                            <strong class="error">{{ $errors->first('alamat') }}</strong>
                                        </span>
                                    @endif
                                        

                              </div>
                        </div>
                        </br>
                        <div class="row mg-t-20">
                              {!! Form::label("nm_tempat", "Tempat", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                {{-- <select name="jadwal_mobilunit"> --}}
                                  {{-- @foreach($jadwal as $jd) --}}
                                  {{-- <option value="{{"jd->id"}}">{{$jd->jadwal_mobil_unit}}</option> --}}
                                  {{-- @endforeach --}}
                                  {!! Form::text('nm_tempat', $jadwal->nm_tempat, ['class'=>'form-control','placeholder'=>'Tempat']) !!}
                                  
                                   @if ($errors->has('nm_tempat'))
                                        <span class="help-block">
                                            <strong class="error">{{ $errors->first('nm_tempat') }}</strong>
                                        </span>
                                    @endif

                              </div>
                        </div>
                           </br>
                        <div class="row mg-t-20">
                              {!! Form::label("target", "Target", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                  {!! Form::number('target', $jadwal->target, ['class'=>'form-control','placeholder'=>'Target']) !!}
                                  
                                   @if ($errors->has('target'))
                                        <span class="help-block">
                                            <strong class="error">{{ $errors->first('target') }}</strong>
                                        </span>
                                    @endif

                              </div>
                        </div>
                        </br>
                         <div class="form-layout-footer mg-t-30">
                                {!! Form::submit('Simpan', ['class'=>'btn btn-default mg-r-5']) !!}
                                
                                {!! Form::reset("Batal", ['class'=>'btn btn-secondary']) !!}
         
                        </div>

                        
                {!! Form::close() !!}


      
         
             
             <!-- form-layout-footer -->

</div>
</div>
</div>
</div>

<!-- card -->
      <!-- kt-pagebody -->
@endsection