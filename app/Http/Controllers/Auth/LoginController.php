<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/users';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
    public function username()
    {
        return 'username';
    }
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    }
    protected function authenticated(Request $request, $user)
    {
        // Check if the user is active
        if ($user->active == 1 && !is_null($user->email_verified_at)) {
            // User is active and has verified their email, proceed with login
            Auth::login($user); // Log the user in
            return redirect()->intended('users'); // Redirect to intended page or dashboard
        } else {
            // Handle inactive or unverified email case
            Auth::logout(); // Ensure the user is logged out
            
            // Determine which error message to display
            $errorMessage = $user->active != 1 
                ? 'Your account is inactive.' 
                : 'Your email is not verified.';
        
            return redirect()->back()->withErrors(['login' => $errorMessage]);
        }

        // Continue with the default authenticated behavior
        return redirect()->intended($this->redirectTo);
    }
}
