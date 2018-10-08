<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PMI KOTA BANDUNG | </title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{URL::asset('vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{URL::asset('build/css/custom.min.css')}}" rel="stylesheet">
  </head>
@yield('css')
  <body class="login">
    <div>
      
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

@if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif


            @if(\Session::has('msg'))
                <div class="alert alert-danger">
                    <div>{{Session::get('msg')}}</div>
                </div>
            @endif


          <form action="{{URL::to('/cek_login')}}" method="POST">
                {{ csrf_field() }}
       
          
              <img src="{{URL::asset('images/logo.jpg')}}" height="50px;">
              <h1>Login Form</h1>
              
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" />
                 @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                @endif
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" />
                             @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

              </div>
              <div>
                {{-- <a class="btn btn-default submit" href="{{url::to('konten')}}" >Log in</a> --}}
                  <button type="submit" class="btn btn-default submit">Login</button>
                 

              <div class="clearfix"></div>

                <div class="clearfix"></div>
                <br />

              </div>
            
          </section>
        </div>
</div>
</div>
</body>
</html>
        
      