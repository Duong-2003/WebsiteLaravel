<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showRegisterForm()
    {
        return view('AdminViews.register' ,[
            'tittle' =>'Đăng Ký AdminGroup'
        ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('AdminViews.register' ,[
    //         'tittle' =>'Đăng Ký AdminGroup'
    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function storeRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required||confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Thực hiện các hành động khác sau khi đăng ký thành công

        return redirect()->route('login')
        ->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
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
