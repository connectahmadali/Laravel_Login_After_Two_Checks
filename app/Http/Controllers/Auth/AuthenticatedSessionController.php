<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(RouteServiceProvider::HOME);
    // }


    public function store(Request $request)
    {
        // Step 1: Retrieve current user's information and check if logged in
        if (Auth::check()) {
            // Step 2: Verify network information (IP address)
            $allowedIPs = ['192.168.1.100', '192.168.1.101'];

            return $allowedIPs;
            $userIP = $request->ip(); // Get user's IP address

            if (in_array($userIP, $allowedIPs)) {
                // Both conditions are met, initiate automatic login process
                // You can customize this part based on your authentication mechanism
                return $this->performAutomaticLogin();
            } else {
                // Unauthorized access from a different IP address
                return response()->json(['error' => 'Unauthorized access from this network.'], 403);
            }
        } else {
            // User is not logged in
            return response()->json(['error' => 'User is not logged in.'], 401);
        }
    }

    private function performAutomaticLogin()
    {
        // Perform your automatic login process here
        // This could involve generating a token, setting session variables, or redirecting to a login route
        // For example, you might redirect the user to the dashboard after successful login
        return redirect()->route('dashboard');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
