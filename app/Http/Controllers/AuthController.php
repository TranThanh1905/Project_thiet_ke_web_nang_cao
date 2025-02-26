<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Hiển thị form đăng ký
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Xử lý đăng ký
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        // Chuyển hướng đến trang danh sách khóa học sau đăng ký thành công
        return redirect()->route('course.index')->with('success', 'Đăng ký thành công!');
    }

    // Hiển thị form đăng nhập
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Xử lý đăng nhập
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            // Chuyển hướng đến trang danh sách khóa học (index.blade.php)
            return redirect()->route('course.index')->with('success', 'Đăng nhập thành công!');
        }

        throw ValidationException::withMessages([
            'email' => 'Email hoặc mật khẩu không đúng.',
        ]);
    }

    // Xử lý đăng xuất
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Bạn đã đăng xuất!');
    }
}
