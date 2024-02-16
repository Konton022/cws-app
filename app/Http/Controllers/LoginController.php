<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {

        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // Validate the form data
        // Attempt to log the user in
        // If successful, redirect to their intended location
        // If unsuccessful, redirect back to the login with the form data
        // $remember = $request->boolean('remember', false);
        // dd($remember);


        $user = $request->input('email');

        alert('Welcome to your page');


        return redirect()->route('users.show', ['user'=> $user]);

    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        // Log the user out
        // Redirect to the login page
    }

    /**
     * Display the user registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        // Validate the form data
        // Create the user
        // Log the user in
        // Redirect to the dashboard or home page
        $email = $request->input('email');

        if($email) {
         return redirect()->back()->withInput();
        }
        return redirect()->route('users.show', ['user' => $email]);
    }

    /**
     * Display the form for requesting a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function sendResetLinkEmail(Request $request)
    {
        // Validate email
        // Send password reset link
    }

    /**
     * Display the password reset form for the given token.
     *
     * @param  string $token
     * @return \Illuminate\Http\Response
     */
    public function showResetForm($token)
    {
        return view('auth.passwords.reset')->with('token', $token);
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function reset(Request $request)
    {
        // Validate password reset data
        // Reset the user's password
    }
}
