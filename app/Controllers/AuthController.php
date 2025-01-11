<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        // Display the login form
        return view('auth/login');
    }

    public function loginProcess()
{
    $userModel = new UserModel();
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');

    // Fetch the user record by email
    $user = $userModel->where('email', $email)->first();

    if (!$user) {
        return redirect()->back()->with('error', 'Invalid email or password.');
    }

    // Verify the password
    if (!password_verify($password, $user['password'])) {
        return redirect()->back()->with('error', 'Invalid email or password.');
    }

    // Set session data for the logged-in user
    session()->set([
        'user_id' => $user['id'],
        'username' => $user['username'],
        'is_admin' => true, // Assuming all users are admins for simplicity
    ]);

    return redirect()->to('/admin')->with('success', 'Welcome, ' . $user['username'] . '!');
}


    public function signup()
    {
        // Display the signup form
        return view('auth/signup');
    }

    public function signupProcess()
{
    $userModel = new UserModel();
    
    // Validate email uniqueness
    $email = $this->request->getPost('email');
    $existingUser = $userModel->where('email', $email)->first();

    if ($existingUser) {
        return redirect()->back()->with('error', 'Email is already registered. Please use a different email.');
    }

    // Prepare user data
    $data = [
        'username' => $this->request->getPost('username'),
        'email' => $email,
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
    ];

    // Save the user data to the database
    if ($userModel->save($data)) {
        return redirect()->to('/blog')->with('success', 'Signup successful. Please login to comment.');
    }

    return redirect()->back()->with('error', 'Signup failed. Please try again.');
}




    public function logout()
    {
        // Destroy the session and redirect to the homepage
        session()->destroy();
        return redirect()->to('/')->with('success', 'You have been logged out.');
    }
}
