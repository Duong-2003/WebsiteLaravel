<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginwebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showLoginWebForm()
        {
            return view('WebsiteViews.www.loginweb' ,[
                'tittle' =>'Đăng Ký Users'
            ]);


        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeLoginWeb( request $request){
        //    dd($request -> input());

        $this->validate($request ,[

                'email'=>'required|email:filter',
                'password'=>'required'
             ]);

             if(Auth::attempt([
                'email'=> $request -> input('email'),
                'password' => $request -> input('password'),
                // 'level' => 1

             ], $request -> input ('remember'))) {

                return redirect()-> route('website');
             }
             Session::flash('error','Email hoặc Password không đúng!');
             return redirect() ->back();
        }
        protected function authenticated(Request $request, $users)
        {
            // Lưu thông tin người dùng vào phiên làm việc
            $request->session()->put('users', $users);
        }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
