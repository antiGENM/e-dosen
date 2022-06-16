<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
	{
		// insert data
		DB::table('dosen')->insert([
			'username' => $request->username,
			'email' => $request->email,
			'password' => $request->password

		]);
		// alihkan halaman ke halaman login
		return redirect('login');
	}
}
