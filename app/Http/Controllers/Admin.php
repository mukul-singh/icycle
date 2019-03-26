<?php

namespace App\Http\Controllers;
use Input;
use DB;
use Session;

define('BASE_URL', 'http://myproj/icycle/public/');

class Admin extends Controller
{
	public function isLoggedIn()
	{
		return Session::has('adminid');
	}

	public function login()
	{
		if(!$this->isLoggedIn()) {
			$title = "Icycle - Admin";
			echo view('admin.meta', ['title' => $title])->render();
			echo view('admin.login')->render();
			return view('admin.footer')->render();
		}
		else {
			$this->dashboard();
		}
	}

	public function dashboard()
	{
		if(!$this->isLoggedIn()) {
			return $this->login();
		}
		$title = "Icycle - Admin";
		echo view('admin.meta', ['title' => $title])->render();
		echo view('admin.nav')->render();
		echo view('admin.dashboard')->render();
		echo view('admin.footer')->render();
	}

	public function actions()
	{
		$action = Input::get("action");
		if($action == "login") {
			$username = Input::get("username");
			$password = Input::get("password");
			$adminUser = DB::table("admins")->where("username", $username)->where("password", $password)->select("id")->get();
			if(count($adminUser) > 0) {
				Session::put('adminid', $adminUser[0]->id);
				return 0;
			}
			else {
				return -1;
			}
		}

		else if($action == "logout") {
			Session::forget("adminid");
		}
	}
}
