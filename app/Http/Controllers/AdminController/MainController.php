<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
//     public function index()
// {
//     if (Auth::user()->role === 'admin') {
//         // Hiển thị chức năng quản trị viên
//         // ...
//         return view('admin.dashboard');
//     } elseif (Auth::user()->role === 'user') {
//         // Hiển thị chức năng người dùng thông thường
//         // ...
//         return view('user.dashboard');
//     }
// }
    public function main()
    {

    $users = User::all();
    return view('AdminViews.home',) ->with('users',$users);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function createAdmin()
    {
        return view('AdminViews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        User::create($input);
        return redirect('student') ->with('success','Users Add');
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
