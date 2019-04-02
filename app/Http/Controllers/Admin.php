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

	public function weekendEvent($action = "list", $eid = null) {
		$title = "Icycle - Admin";
		echo view('admin.meta', ['title' => $title])->render();
		echo view('admin.nav')->render();
		if($action === "list") {
			$events = DB::table("weekend_events")->orderBy("id", "desc")->get();
			echo view("admin.weekendEvents", ["events" => $events])->render();
		}
		else if($action == "new") {
			echo view('admin.addWeekendEvent')->render();
		}
		else if($action == "update") {
			$event = DB::table("weekend_events")->where("id", $eid)->first();
			if(count($event)) {
				$event->gallery = DB::table("event_gallery")->where("eid", $event->id)->get();
				$event->infoPoints = DB::table("infoPoints")->where("eid", $event->id)->get();
			}
			echo view('admin.addWeekendEvent', ['event' => $event])->render();
		}
		return view('admin.footer')->render();
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

		else if($action == "add-weekend-event") {
			$data = json_decode(Input::get("data"), true);
			$points = json_decode(Input::get("detailPoints"), true);
			if(isset($_FILES['eventBanner'])) {
				$bannerImg = $this->uploadFile($_FILES['eventBanner'], 'images/uploads/weekend-events/banner');
				if($bannerImg != -1) {
					$data['banner'] = $bannerImg;
				}
			}
			if(isset($_FILES['elevationImg'])) {
				$elevationImg = $this->uploadFile($_FILES['elevationImg'], 'images/uploads/weekend-events/elevation');
				if($elevationImg != -1) {
					$data['elevation_img'] = $elevationImg;
				}
			}
			if(isset($_FILES['mentorImg'])) {
				$mentorImg = $this->uploadFile($_FILES['mentorImg'], 'images/uploads/weekend-events/mentor');
				if($mentorImg != -1) {
					$data['mentor_img'] = $mentorImg;
				}
			}
			$eid = DB::table("weekend_events")->insertGetId($data);
			for($i = 0; $i < count($points); $i++) {
				$points[$i]['eid'] = $eid;
			}
			DB::table("infoPoints")->insert($points);
			$gallery = [];
			for($i = 1; $i <= Input::get("galleryImageCount"); $i++) {
				if(isset($_FILES['galleryImage'.$i])) {
					$galleryImg = $this->uploadFile($_FILES['galleryImage'.$i], 'images/uploads/weekend-events/gallery');
					if($galleryImg != -1) {
						$gallery[] = ["eid" => $eid, "image" => $galleryImg];
					}
				}
			}
			if(count($gallery)) {
				DB::table("event_gallery")->insert($gallery);
			}
		}
	}

	public function uploadFile($file, $destination)
	{
		$src = $file['tmp_name'];
		$filename = bin2hex(openssl_random_pseudo_bytes(5)).'.png';
		$target = $destination.'/'.$filename;
		if(move_uploaded_file($src, $target)) {
			return $filename;
		}
	}
}
