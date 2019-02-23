<?php

namespace App\Http\Controllers;
define('BASE_URL', 'http://myproj/icycle/public/');

class Site extends Controller
{
	public function index()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('home')->render();
		return view('footer')->render();
	}
}