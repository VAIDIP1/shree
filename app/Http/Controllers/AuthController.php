<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function validateEmail(Request $request)
    {
        if ($request->getMethod() == 'GET') {
            $data = $request->all();
            if ($data['email'] != '') {
                $role = (!empty($data['role'])) ? base64_decode($data['role']) : '';
                $count = User::where('email', $data['email']);
                if(!empty($role)) {
                    $count->where('role_id', $role);
                }
                $count = $count->exists();
                if ($count) {
                    return Response::json([
                        'success' => false,
                        'message' => "Email address already taken!",
                    ]);
                } else {
                    return Response::json([
                        'success' => true,
                        'message' => ""
                    ]);
                }
            }
            return Response::json([
                'success' => true,
                'message' => ""
            ]);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required','email',
                'phone_number' => 'required',
                'password' => 'required|min:9',
            ]);

        $data = $request->all();

        $data['password'] = Hash::make($data['password']);

        User::create($data);

       return response()->json([
            'message' => 'Successfully registered!',
            'redirect_url' => route('login'),
        ]);
    }

    public function postAdminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->withSuccess('You have Successfully loggedin');
        }

        return redirect()->back()->withInput()->withError('Oppes! You have entered invalid credentials');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }
    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        //
    }
    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

}
