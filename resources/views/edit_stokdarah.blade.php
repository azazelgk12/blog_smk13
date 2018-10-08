@extends('template')

@section('script')



@endsection


@section('content')
  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div>
              </div>
<div class="x_content">
                    <br />
        <h2><u>EDIT STOK DARAH {{$stokd->golongandarah}} {{$stokd->rhesus}}</u> </h2>

      </div>
      {{-- <!- kt-pagetitle > --}}
    
      @if (session('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}
            </div>
      @elseif(session('gagal'))
            <div class="alert alert-danger">
                {{ session('gagal') }}
            </div>

      @endif
       {{-- @if(\Session::has('msg'))
                <div class="alert alert-danger">
                    <div>{{Session::get('msg')}}</div>
                </div>
            @endif --}}
        </br>
                
<div class="form-group" >
                            {!! Form::model($stokd, ['method'=>'PATCH','route'=>['stokdarah.update',$stokd->id]]) !!}
                                  <div class="form-group">
                                  <div class="row mg-t-20">
                                        {!! Form::label("wb", "WB", ['class'=>'col-sm-1 form-control-label']) !!}
                                        
                                        <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                              {!! Form::number('wb', $stokd->wb, ['class'=>'form-control','min'=>0]) !!}
                                          
                                          @if ($errors->has('wb'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('wb') }}</strong>
                                        </span>
                                @endif                        
                              </div>
                                        </div>
                                  </div>
                                      </br>
                                      <div class="form-group">
                                  <div class="row mg-t-20">
                                        {!! Form::label("tc", "TC", ['class'=>'col-sm-1 form-control-label']) !!}
                                        <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                              {!! Form::number('tc', $stokd->tc ,['class'=>'form-control','min'=>0]) !!}
                              
                                              @if ($errors->has('tc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tc') }}</strong>
                                        </span>
                                @endif
                              </div>
                                        </div>
                                  </div>
                                    </br>
                                    <div class="form-group">
                                  <div class="row mg-t-20">
                                        {!! Form::label("prc", "PRC", ['class'=>'col-sm-1 form-control-label']) !!}
                                        <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                              {!! Form::number('prc', $stokd->prc, ['class'=>'form-control','min'=>0]) !!}
                                        
                                              @if ($errors->has('prc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prc') }}</strong>
                                        </span>
                                @endif
                              </div>
                                        
                                      </div>
                                  </div>
                                  </br>
                                  <div class="form-group">
                                  <div class="row mg-t-20">
                                        {!! Form::label("ffp", "FFP", ['class'=>'col-sm-1 form-control-label']) !!}
                                        <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                              {!! Form::number('ffp', $stokd->ffp, ['class'=>'form-control','min'=>0]) !!}
                                            
                                        @if ($errors->has('ffp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ffp') }}</strong>
                                        </span>
                                @endif  
                                        
                                  </div>
                                </div>
                              </div>
                                    </br>
                                    <div class="form-group">
                                  <div class="row mg-t-20">
                                        {!! Form::label("ahf", "AHF", ['class'=>'col-sm-1 form-control-label']) !!}
                                        <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                              {!! Form::number('ahf', $stokd->ahf, ['class'=>'form-control','min'=>0]) !!}
                                            
                                              @if ($errors->has('ahf'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ahf') }}</strong>
                                        </span>
                                @endif
                                          </div>
                                        </div>
                                  </div>
                                      </br>
                                      <div class="form-group">
                                  <div class="row mg-t-20">
                                        {!! Form::label("bc", "BC", ['class'=>'col-sm-1 form-control-label']) !!}
                                        <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                              {!! Form::number('bc', $stokd->bc, ['class'=>'form-control','min'=>0]) !!}
                                            
                                              @if ($errors->has('bc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bc') }}</strong>
                                        </span>
                                @endif        
                              
                                        </div>
                                  </div>
                                </div>
                                    </br>
                                    <div class="form-group">
                                  <div class="row mg-t-20">
                                        {!! Form::label("lp", "LP", ['class'=>'col-sm-1 form-control-label']) !!}
                                        <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                                              {!! Form::number('lp', $stokd->lp, ['class'=>'form-control','min'=>0]) !!}
                                          
                                              @if ($errors->has('lp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lp') }}</strong>
                                        </span>
                                @endif
                                      </div>
                                  </div>
                                </div>
</br>                             
                                          <div class="form-group">      
                                         {!! Form::submit('Ubah', ['class'=>'btn btn-primary col-md-3']) !!}
                                  </div>




                                

                              {!! Form::close() !!} 
                         

                         
                     {{-- </div> --}}
                     {{-- </div> --}}
                     {{-- </div> --}}
                     {{-- </div> --}}
                
          {{-- </div> --}}
        {{-- </div> --}}
      {{-- </div>{{-  --}}
    {{-- </div> --}} 
{{-- </div>
</div>
</div>
</div>
</div>
</div>
 --}}
{{-- </div> --}}
</div>
</div>
</div>
</div>
{{-- </div>
</div>
</div>
</div --}}{{-- 
</div>
</div>
</div>
</div>
</div>
</div>
</di>
</div>
</div>
</div> --}}
@endsection




































{{-- 
@extends('template')

@section('css')
<style>
  #tri{
    padding: 6px 95px;

  }

</style>
@endsection

@section('script')

@endsection

@section('content')
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div>
              </div>
<div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left">
                      @if (session('sukses'))
            <div class="alert alert-success">
                {{ session('sukses') }}
            </div>
      @elseif(session('gagal'))
            <div class="alert alert-danger">
                {{ session('gagal') }}
            </div>

      @endif

    @foreach($stokd as $s)

                      <h2></h2> 
                      <br></br>
                      <form action="{{ route('stokdarah.update', $stokd->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
                     <div class="form-group">
                       
    <label class="col-md-2">WB</label>
<div class="col-md-2">
<input class="form-control" min="0" name="" type="number" value="{{ $r->wb }}"id="">
</div>        
</div>  


<div class="form-group">
<label class="col-md-2">TC</label>
<div class="col-md-2">
<input class="form-control" min="0" name="" type="number" value="{{ $r->tc }}" id="">
</div>        
</div>  

<div class="form-group">
<label class="col-md-2">PRC</label>
<div class="col-md-2">
<input class="form-control" min="0" name="" type="number" value="{{ $r->prc }}" id="">
</div>        
</div>  

<div class="form-group">
<label class="col-md-2">FFP</label>
<div class="col-md-2">
<input class="form-control" min="0" name="" type="number" value="{{ $r->ffp }}" " id="">
</div>        
</div>  

<div class="form-group">
<label class="col-md-2">AHF</label>
<div class="col-md-2">
<input class="form-control" min="0" name="" type="number" value="{{ $r->ahf }}" id="">
</div>        
</div>  

<div class="form-group">
<label class="col-md-2">BC</label>
<div class="col-md-2">
<input class="form-control" min="0" name="" type="number" value="{{ $r->bc }}" id="">
</div>        
</div>                  

<div class="form-group">
<label class="col-md-2">LP</label>
<div class="col-md-2">
<input class="form-control" min="0" name="" type="number" value="{{ $r->lp }}" id="">
</div>        
</div>  

<button type="submit" id ="tri" class="btn btn-round btn-danger">Submit</button>
  </form>                


@endforeach

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</di>
</div>
</div>
</div>






@endsection
 --}}








