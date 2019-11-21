<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employeemaster;

class UserloginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeemasters = employeemaster::all();
        return view('login',compact('employeemaster',$employeemasters));
        //return view('login',respone()->json($employeemasters));
        //return view('login',response()->json($employeemasters));
    }
    function doLogin(Request $request)
    {

        $username = $request->Username;
        $password = $request->Password;
       
        $employeemasters = employeemaster::where('username',$username)->where('password',$password)->first();

        

        //return $username;
       /*  return response()->json($employeemasters); */
        //echo $employeemasters;

         if($employeemasters){
            //echo 'Success login >> Welcome';
            session(['userLogin'=>$employeemasters]);
            return redirect('/home');
         }else
        {
            return redirect('/logins');
         }

        // echo 'Error login';

      
    } 
    public function doLogout()
    {
        Auth::logout();
        return redirect::to('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $employeemasters = employeemaster::create([
            'name' => 'broken',
            'last' => 'last',
            'username' => $request->Username,
            'password' => $request->Password,
            'phone' => '854589569',
            'role' => 'programmer'

        ]);
        return view('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
