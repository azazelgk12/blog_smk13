<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Auth;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
use Session;
use Validator;

class LoginController extends Controller
{

	    // use AuthenticatesUsers;



	        // protected $redirectTo = '/login';

    // public function attempt(Request $request)
    // {
    //     return view('login');
    // }
    // public function cek_login()
    // // 
    // {
        
        
	
	// public function postlogin(Request $request)
	// {
	// 		$name=$request->input('nama');
	// 		$password=$request->input('password');
	// 		$data = DB::select('select id from admin where nama=? and password=? ' ,[$nama,$password]);
	// 		if(count($data))
	// 		{
	// 		echo "hey man, your log in berhasil";
				
	// 		}
	// }

	public function cek_login(Request $req)
		{

			$username 	= $req->input('username');
			$pass 		= $req->input('password');
			// $username = DB::table('admin')->get();
			// $password = DB::table('admin')->get();       	 


			
			


              //validator
              
        $validator = Validator::make(request()->all(), [
            'username'  => 'required|max:30',
            'password' => 'required|max:100',
        ]);
        

        if($validator->fails()) {
            	return redirect()
                ->back()
                ->withErrors($validator->errors());
       
            }
         else
         	{
         		$req = DB::table('admin')
                     ->select(DB::raw('count(*) as username, status'))
                     ->where([['username','=',$username],['password','=',$pass]])
                     ->count();
         		if($req == 1)
	        		{
	        			Session::put('username', $username);
	        			return redirect('/konten');
	        		}
	        	else
	    			{
	    				return redirect('/login')->with('msg','username dan password salah');
	    			}
         	}	

            // print_r($req);
            
                     // return view('konten', ['username','password' => $req]);


			// $req =  DB::table('admin')->select(['username' => 1]);
			// $req =  DB::table('admin')->select(['Password' => 1]);
			// return view('konten', ['username','password' => $req]);

    }

    // public function logout()
    // {
    // }
// $this->login->except('logout')
  public function logout(Request $request){
  		// Auth::logout
       $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/login');
    }
    			
    		}



 //    	if(Hash::check($req('username'),Hash::make($req('username')))){  echo"username current"; }
 //    	else{ echo "username Wrong";}

 //    	if(Hash::check($req('Password'),Hash::make($req('Password')))){   echo"Password current"; }
 //    	else{ echo "Password Wrong";}

    			// Session::flush();
    			 // protected redirectTo = '/login';
 // $this->middleware('guest')->except('login');

// }
	
// 	}
// 			// if (
			// 	Request::check($req-> input('username'),Request::make($req-> input('username')) {
			// 	else{ echo "username Wrong";}

			// if (
			// 	Request::check($req-> 'Password'),Request::make($req-> 'Password')) {
				
			// 	else{ echo "Password Wrong";}
			// 	return view('konten', ['username','password' => $req]);

				# code...
			
		
	
  //       $req = DB::table('admin')
  //       $username = $req->input('username');
		// $Password 	= $req->input('password');
   		// where('username',$req ('username'))
   		// first();
   		// where('Password',$req ('Password'))
   		// first();
    	


       	 
     //   	 return view('konten', ['username','password' => $req]);
    
		


			# cek validasi
		
        
