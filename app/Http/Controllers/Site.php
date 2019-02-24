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

	public function about()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$pageTitle = "About Us";
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['pageTitle' => $pageTitle])->render();
		echo view('about')->render();
		return view('footer')->render();
	}

	public function annualEvents()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$pageTitle = "Annual Events";
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['pageTitle' => $pageTitle])->render();
		echo view('annualEvents')->render();
		return view('footer')->render();
	}
}