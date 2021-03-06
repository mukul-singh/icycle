<?php

namespace App\Http\Controllers;
use DB;
use Input;

define('BASE_URL', 'http://myproj/icycle/public/');

class Site extends Controller
{
	protected $months = ["", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
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
		$events = DB::table("annual_events")->where("active", 1)->get();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle])->render();
		echo view('annualEvents', ['events' => $events])->render();
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
		$pageTitle = "Weekend Events";
		$navbar = view('nav')->render();
		$events = DB::table("weekend_events")->where("active", 1)->get();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle])->render();
		echo view('weekendEvents', ['events' => $events, 'months' => $this->months])->render();
		return view('footer')->render();
	}

	public function weekendEventsDetail($trail, $date)
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$event = DB::table("weekend_events")->where("trail", urldecode($trail))->where("date", $date." 00:00:00")->where("active", 1)->take(1)->get();
		if(count($event)) {
			$event = $event[0];
			$event->gallery = DB::table("event_gallery")->where("eid", $event->id)->get();
			$event->infoPoints = DB::table("infoPoints")->where("eid", $event->id)->get();
		}
		$subTitle = substr($event->date, 9, 2)." ".strtoupper($this->months[(int)substr($event->date, 5, 2)])." ".substr($event->date, 0, 4);
		$navbar = view('nav')->render();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $event->trail, 'subTitle' => $subTitle])->render();
		echo view('weekendEventsDetail', ['event' => $event])->render();
		return view('footer')->render();
	}

	public function cyclotours()
	{
		$title = "Icycle - Cyclotour Hub";
		$desc = "Icycle - Cyclotour Hub";
		$pageTitle = "Cyclotour Hub";
		$navbar = view('nav')->render();
		$tours = DB::table("cyclotours")->where("active", 1)->get();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle])->render();
		echo view('cyclotours', ['tours' => $tours])->render();
		return view('footer')->render();
	}

	public function stories()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$pageTitle = "Impact Stories";
		$navbar = view('nav')->render();
		$stories = DB::table("stories")->where("active", 1)->get();
		foreach ($stories as $key => $story) {
			$stories[$key]->date =  substr($story->date, 9, 2)." ".strtoupper($this->months[(int)substr($story->date, 5, 2)])." ".substr($story->date, 0, 4);
		}
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle])->render();
		echo view('stories', ['stories' => $stories])->render();
		return view('footer')->render();
	}

	public function storyDetail($title, $sid) {
		$sid = base64_decode(base64_decode($sid));
		$story = DB::table("stories")->where("id", $sid)->where("active", 1)->first();
		$story->date =  substr($story->date, 9, 2)." ".strtoupper($this->months[(int)substr($story->date, 5, 2)])." ".substr($story->date, 0, 4);
		$stories = DB::table("stories")->where("id", $sid)->where("active", 1)->orderBy("id", "<>", "rand()")->take(3)->get();
		$stories[1] = $stories[0];
		$stories[2] = $stories[0];
		foreach ($stories as $key => $s) {
			$stories[$key]->date =  substr($s->date, 9, 2)." ".strtoupper($this->months[(int)substr($s->date, 5, 2)])." ".substr($s->date, 0, 4);
		}
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$pageTitle = "Impact Stories";
		$navbar = view('nav')->render();
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle])->render();
		echo view('storyDetail', ['story' => $story, 'stories' => $stories])->render();
		return view('footer')->render();
	}

	public function hireBicycle()
	{
		$title = "Icycle - Rediscover Cycling";
		$desc = "Icycle - Rediscover Cycling";
		$pageTitle = "Hire a Bicycle";
		$navbar = view('nav')->render();
		$bicycles = DB::table("bicycles")->where("active", 1)->get();
		foreach ($bicycles as $key => $b) {
			$bicycles[$key]->images = DB::table("bicycle_photos")->where("bid", $b->id)->get();
			$bicycles[$key]->specs = explode(PHP_EOL, $b->specs);
		}
		echo view('meta', ['title' => $title, 'desc' => $desc])->render();
		echo view('header', ['navbar' => $navbar, 'pageTitle' => $pageTitle])->render();
		echo view('hireBicycle', ['bicycles' => $bicycles])->render();
		return view('footer')->render();
	}

	public function actions()
	{
		$action = Input::get("action");
		if($action == "getBicycleSpecs") {
			$bid = base64_decode(base64_decode(Input::get("bid")));
			$bicycle = DB::table("bicycles")->where("active", 1)->where("id", $bid)->first();
			$bicycle->images = DB::table("bicycle_photos")->where("bid", $bid)->get();
			$bicycle->specs = explode(PHP_EOL, $bicycle->specs);
			return view('modals.bicycleModal', ['bicycle' => $bicycle])->render();
		}
	}
}
