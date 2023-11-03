<?php

namespace App\Http\Controllers\AdminController\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{


    // use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('AdminViews.email');
    }

    // Override phương thức sendResetLinkEmail để tùy chỉnh gửi email đặt lại mật khẩu
    public function sendResetLinkEmail(Request $request)
    {
        // $this->validateEmail($request);

        // $response = $this->broker()->sendResetLink(
        //     $request->only('email')
        // );

        // if ($response == Password::RESET_LINK_SENT) {
        //     return redirect()->route('password.request')
        //         ->with('status', 'Gửi liên kết đặt lại mật khẩu thành công!');
        // } else {
        //     return redirect()->back()
        //         ->withErrors(['email' => trans($response)]);
        }
    }


