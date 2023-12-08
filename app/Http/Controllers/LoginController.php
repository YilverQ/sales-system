<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Cashier;
use App\Models\Admin;


class LoginController extends Controller
{
    /**
     * Return a login page.
     */
    public function index(Request $request)
    {
        //Remove all sessions that are involved with the authentication
        $request->session()->forget('is_admin_valid');
        $request->session()->forget('is_cashier_valid');
        return view('login.index');
    }

    /**
     * Check the kind of authentication.
     */
    public function auth(Request $request)
    {
        //Check that kind of auth required.
        if ($request->input('is_admin'))
        {
            //Redirect to auth_admin.
            return $this->auth_admin($request);
        }
        //Redirect to auth_cashier.
        return $this->auth_cashier($request);
        
    }


    /**
     * Check the authentication for admin role.
     */
    public function auth_admin(Request $request)
    {
        $email    = $request->input('email');
        $password = $request->input('password');
        $admin    = Admin::find(1);

        //If the email and the password are correct, the user has permission.
        if ($email == $admin->email and $password == $admin->password)
        {
            $request->session()->put('is_admin_valid', 'true');
            return to_route('admin.index');
        }
        
        session()->flash('message-error', 'Error, los datos ingresados no son correctos');
        return to_route('login.index');
    }


    /**
     * Check the authentication for cashier role.
     */
    public function auth_cashier(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $cashier = Cashier::where('email', '=', $email)->first();

        if (empty($cashier->password)) {
            session()->flash('message-error', 'Error, los datos ingresados no son correctos');
            return to_route('login.index');
        }

        //If password is correct, the user has permission.
        if ($password == $cashier->password) {
            $request->session()->put('is_cashier_valid', 'true');
            return to_route('consumer.create');
        }

        session()->flash('message-error', 'Error, los datos ingresados no son correctos');
        return to_route('login.index');
    }


    /**
     * Logout the session.
     */
    public function logout(Request $request)
    {
        //Remove all sessions that are involved with the authentication
        $request->session()->forget('is_admin_valid');
        $request->session()->forget('is_cashier_valid');

        return to_route('login.index');
    }
}
