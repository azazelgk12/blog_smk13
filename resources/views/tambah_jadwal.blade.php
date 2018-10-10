@extends('template')

@section('css')


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
                     <h2>Jadwal jadwal mobil unit</h2>
                    </div>
                  <div class="x_content">

                 

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
      
                      

                    {!! Form::open(["route"=>"jadwal_mobilunit.store",'class'=>'form form-horizontal','method'=>'post']) !!}
                        {!! Form::token() !!}
                        <div class="row mg-t-20">
                              {!! Form::label("tanggal", "Tanggal", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                 {{--   {!! Form::text('tanggal', old('tanggal'), ['class'=>'form-control','rows'=>'3','id'=>'tanggal']) !!} --}}

                                 {!! Form::date('tanggal', \Illuminate\Support\Carbon::now(), ['class'=>'form-control']) !!}


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
                                  {!! Form::time('waktu', old('waktu'), ['class'=>'form-control','placeholder'=>'Waktu Pelaksanaan']) !!}

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
                              <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                 <select name="id_kdd" id="id-kdd" class="form-control">
                                   <option value="" selected >--Pilih KDD--</option>
                                   @foreach($kdd as $k)
                                      <option value="{{ $k->id_kdd }}">{{ $k->nm_kdd }}</option>          
                                   @endforeach
                                 </select>
                                  
                                 
                                   @if ($errors->has('nm_kdd'))
                                        <span class="help-block">
                                            <strong class="error">{{ $errors->first('id_kdd') }}</strong>
                                        </span>
                                    @endif

                              </div>
                        </div>
                        </br>
                         <div class="row mg-t-20">
                              {!! Form::label("nm_tempat", "Nama Tempat", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                 <select name="id_tempat" id="id-tempat" class="form-control">
                                   <option value="" selected >--Pilih Tempat--</option>
                                   @foreach($tempat as $t)
                                      <option value="{{ $t->id_tempat }}">{{ $t->nm_tempat }}</option>          
                                   @endforeach
                                 </select>
                                  
                                 
                                   @if ($errors->has('nm_kdd'))
                                        <span class="help-block">
                                            <strong class="error">{{ $errors->first('id_tempat') }}</strong>
                                        </span>
                                    @endif

                              </div>
                        </div>
                        </br>
                        <div class="row mg-t-20">
                              {!! Form::label("alamat", "Alamat", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                 {!! Form::textarea('alamat', old('alamat'), ['class'=>'form-control','rows'=>'3']) !!}

                                  @if ($errors->has('alamat'))
                                        <span class="help-block">
                                            <strong class="error">{{ $errors->first('alamat') }}</strong>
                                        </span>
                                    @endif

                              </div>
                        </div>

                        </br>
                        
                        <div class="row mg-t-20">
                              {!! Form::label("target", "Target", ['class'=>'col-sm-2  form-control-label']) !!}
                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                 {!! Form::text('target', old('target'), ['class'=>'form-control','rows'=>'3']) !!}

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