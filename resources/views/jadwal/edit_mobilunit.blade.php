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
                      <h3>Users <small>Some examplesed</small></h3>
                    </div>
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate>

                      <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
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

@foreach($jadwal as $jd)
                
               @endforeach
              
                {!! Form::model($jadwal, ['method'=>"PUT",'route'=>['jadwal.update',$jd->id]]) !!}
                {{-- {!! Form::open(["mehtod"=>"POST","route"=>"jadwal.store",'class'=>'form form-horizontal']) !!} --}}

                        <div class="row mg-t-20">
                              {!! Form::label("tanggal", "Tanggal", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                  {!! Form::text('tanggal',$jd->tanggal, ['id'=>'tanggal','class'=>'form-control','placeholder'=>'Tanggal','readonly'=>true]) !!}

                                    @if ($errors->has('tanggal'))
                                        <span class="help-block">
                                            <strong class="error">{{ $errors->first('tanggal') }}</strong>
                                        </span>
                                    @endif

                              </div>
                        </div>

                         <div class="row mg-t-20">
                              {!! Form::label("waktu", "Waktu", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                  {!! Form::text('waktu', $jd->waktu, ['class'=>'form-control','placeholder'=>'Waktu Pelaksanaan']) !!}

                                  @if ($errors->has('waktu'))
                                        <span class="help-block">
                                            <strong class="error">{{ $errors->first('waktu') }}</strong>
                                        </span>
                                    @endif

                              </div>
                        </div>

                        <div class="row mg-t-20">
                              {!! Form::label("namakdd", "Nama KDD", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                  {!! Form::text('namakdd', $jd->nama_kdd, ['class'=>'form-control','placeholder'=>'Nama KDD']) !!}
                                  
                                   @if ($errors->has('namakdd'))
                                        <span class="help-block">
                                            <strong class="error">{{ $errors->first('namakdd') }}</strong>
                                        </span>
                                    @endif

                              </div>
                        </div>

                        <div class="row mg-t-20">
                              {!! Form::label("alamatkdd", "Alamat", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                 {!! Form::textarea('alamatkdd', $jd->alamat, ['class'=>'form-control','rows'=>'3']) !!}

                                  @if ($errors->has('alamatkdd'))
                                        <span class="help-block">
                                            <strong class="error">{{ $errors->first('alamatkdd') }}</strong>
                                        </span>
                                    @endif

                              </div>
                        </div>
                        
                         <div class="form-layout-footer mg-t-30">
                                {!! Form::submit('Simpan', ['class'=>'btn btn-default mg-r-5']) !!}
                                
                                {!! Form::reset("Batal", ['class'=>'btn btn-secondary']) !!}
         
                        </div>

                        
                {!! Form::close() !!}

              
         
             
             <!-- form-layout-footer -->


        </div><!-- card -->
      </div><!-- kt-pagebody -->
@endsection