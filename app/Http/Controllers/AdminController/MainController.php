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
        //   $users = Auth::user();
        //     $users = User::all();
        //     return view('AdminViews.home', compact('users'));
        // lấy ra toàn bộ user

        $users = User::all();
        return view("AdminViews.home", compact("users"));


    // Thực hiện các thao tác khác với đối tượng User
}
        // dd($users);



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
        $input = $request->all();
        User::create($input);
        return redirect('admin/users')->with('success', 'Admin user added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('AdminViews.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editAdmin(string $id)
    {
        $user = User::findOrFail($id);
        return view('AdminViews.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateAdmin(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();
        $user->update($input);
        return redirect('admin/users')->with('success', 'Admin user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyAdmin(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('admin/users')->with('success', 'Admin user deleted successfully');
    }
}
