<?php

namespace App\Http\Controllers;
define('BASE_URL', 'http://myproj/icycle/public/');

class Admin extends Controller
{
	public function login()
	{
		$title = "Icycle - Admin";
		echo view('admin.meta', ['title' => $title])->render();
		echo view('admin.nav')->render();
		return view('admin.login')->render();
	}
}
