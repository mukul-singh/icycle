<?php

namespace App\Http\Controllers;
use DB;
define('BASE_URL', 'http://myproj/icycle/public/');

class Site extends Controller
{
	public function index()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$navbar = view('nav')->render();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('home', ['navbar' => $navbar])->render();
		return view('footer')->render();
	}

	public function login()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$navbar = view('nav')->render();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('login', ['navbar' => $navbar])->render();
		return view('footer')->render();
	}

	public function about()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$pageTitle = "About Us";
		$navbar = view('nav')->render();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle])->render();
		echo view('about')->render();
		return view('footer')->render();
	}

	public function contact()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$pageTitle = "Contact Us";
		$navbar = view('nav')->render();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle])->render();
		echo view('contact')->render();
		return view('footer')->render();
	}

	public function annualEvents()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$pageTitle = "Annual Events";
		$navbar = view('nav')->render();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle])->render();
		echo view('annualEvents')->render();
		return view('footer')->render();
	}

	public function corporateEvents()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$pageTitle = "Corporate Events";
		$navbar = view('nav')->render();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle])->render();
		echo view('corporateEvents')->render();
		return view('footer')->render();
	}

	public function weekendEvents()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$pageTitle = "Corporate Events";
		$navbar = view('nav')->render();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle])->render();
		echo view('weekendEvents')->render();
		return view('footer')->render();
	}

	public function weekendEventsDetail($trail, $date)
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$event = DB::table("weekend_events")->where("trail", urldecode($trail))->where("date", $date." 00:00:00")->first();
		if(count($event)) {
			$event->gallery = DB::table("event_gallery")->where("eid", $event->id)->get();
			$event->infoPoints = DB::table("infoPoints")->where("eid", $event->id)->get();
		}
		$pageTitle = "Ghati Ghats";
		$subTitle = "26 JAN 2019";
		$navbar = view('nav')->render();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle, 'subTitle' => $subTitle])->render();
		echo view('weekendEventsDetail', ['event' => $event])->render();
		return view('footer')->render();
	}

	public function stories()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$pageTitle = "Impact Stories";
		
		$navbar = view('nav')->render();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle])->render();
		echo view('stories')->render();
		return view('footer')->render();
	}

	public function hireBicycle()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$pageTitle = "Hire a Bicycle";
		$navbar = view('nav')->render();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle])->render();
		echo view('hireBicycle')->render();
		return view('footer')->render();
	}
}
