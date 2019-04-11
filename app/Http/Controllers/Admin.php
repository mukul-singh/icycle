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

	public function weekendEvent($action = "list", $eid = null)
	{
		if(!$this->isLoggedIn()) {
			return $this->login();
		}
		$title = "Icycle - Admin";
		echo view('admin.meta', ['title' => $title])->render();
		echo view('admin.nav')->render();
		if($action === "list") {
			$events = DB::table("weekend_events")->where("active", 1)->orderBy("id", "desc")->get();
			echo view("admin.weekendEvents", ["events" => $events])->render();
		}
		else if($action == "new") {
			echo view('admin.addWeekendEvent')->render();
		}
		else if($action == "update") {
			$event = DB::table("weekend_events")->where("active", 1)->where("id", $eid)->get();
			if(count($event)) {
				$event = $event[0];
				$event->gallery = DB::table("event_gallery")->where("eid", $event->id)->get();
				$event->infoPoints = DB::table("infoPoints")->where("eid", $event->id)->get();
			}
			echo view('admin.addWeekendEvent', ['event' => $event])->render();
		}
		return view('admin.footer')->render();
	}

	public function annualEvent($action = "list", $aid = null)
	{
		if(!$this->isLoggedIn()) {
			return $this->login();
		}
		$title = "Icycle - Admin";
		echo view('admin.meta', ['title' => $title])->render();
		echo view('admin.nav')->render();
		if($action === "list") {
			$events = DB::table("annual_events")->where("active", 1)->orderBy("id", "desc")->get();
			echo view("admin.annualEvents", ["events" => $events])->render();
		}
		else if($action == "new") {
			echo view('admin.addAnnualEvent')->render();
		}
		else if($action == "update") {
			$event = DB::table("annual_events")->where("active", 1)->where("id", $aid)->first();
			echo view('admin.addAnnualEvent', ['event' => $event])->render();
		}
		return view('admin.footer')->render();
	}

	public function cyclotour($action = "list", $cid = null)
	{
		if(!$this->isLoggedIn()) {
			return $this->login();
		}
		$title = "Icycle - Admin";
		echo view('admin.meta', ['title' => $title])->render();
		echo view('admin.nav')->render();
		if($action === "list") {
			$tours = DB::table("cyclotours")->where("active", 1)->orderBy("id", "desc")->get();
			echo view("admin.cyclotours", ["tours" => $tours])->render();
		}
		else if($action == "new") {
			echo view('admin.addCyclotour')->render();
		}
		else if($action == "update") {
			$tour = DB::table("cyclotours")->where("active", 1)->where("id", $cid)->first();
			echo view('admin.addCyclotour', ['tour' => $tour])->render();
		}
		return view('admin.footer')->render();
	}

	public function stories($action = "list", $sid = null)
	{
		if(!$this->isLoggedIn()) {
			return $this->login();
		}
		$title = "Icycle - Admin";
		echo view('admin.meta', ['title' => $title])->render();
		echo view('admin.nav')->render();
		if($action === "list") {
			$stories = DB::table("stories")->where("active", 1)->orderBy("id", "desc")->get();
			echo view("admin.stories", ["stories" => $stories])->render();
		}
		else if($action == "new") {
			echo view('admin.addStory')->render();
		}
		else if($action == "update") {
			$story = DB::table("stories")->where("active", 1)->where("id", $sid)->first();
			echo view('admin.addStory', ['story' => $story])->render();
		}
		return view('admin.footer')->render();
	}

	public function bicycles($action = "list", $bid = null)
	{
		if(!$this->isLoggedIn()) {
			return $this->login();
		}
		$title = "Icycle - Admin";
		echo view('admin.meta', ['title' => $title])->render();
		echo view('admin.nav')->render();
		if($action === "list") {
			$bicycles = DB::table("bicycles")->where("active", 1)->orderBy("id", "desc")->get();
			echo view("admin.bicycles", ["bicycles" => $bicycles])->render();
		}
		else if($action == "new") {
			echo view('admin.addBicycle')->render();
		}
		else if($action == "update") {
			$bicycle = DB::table("bicycles")->where("active", 1)->where("id", $bid)->first();
			$bicycle->images = DB::table("bicycle_photos")->where("bid", $bid)->get();
			echo view('admin.addBicycle', ['bicycle' => $bicycle])->render();
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
				setcookie("adminid", $adminUser[0]->id, time() + (86400 * 30), "/");
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
			$eid = Input::get("eid");
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
			if($eid == 0) {
				// Insert a new event
				$eid = DB::table("weekend_events")->insertGetId($data);
			}
			else {
				// Update an event
				DB::table("weekend_events")->where("id", $eid)->update($data);

				// Delete old infoPoints
				DB::table("infoPoints")->where("id", $eid)->delete();
			}
			for($i = 0; $i < count($points); $i++) {
				$points[$i]['eid'] = $eid;
			}
			// Insert new points
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

		else if($action == "cyclotour") {
			$data = Input::get("data");
			$cid = Input::get("cid");
			if($cid == 0) {
				DB::table("cyclotours")->insert($data);
			}
			else {
				DB::table("cyclotours")->where("id", $cid)->update($data);
			}
		}

		else if($action == "stories") {
			$sid = Input::get("sid");
			$data = json_decode(Input::get("data"), true);
			if(isset($_FILES['banner'])) {
				$bannerImg = $this->uploadFile($_FILES['banner'], 'images/uploads/stories/banners');
				if($bannerImg != -1) {
					$data['banner'] = $bannerImg;
				}
			}
			if($sid == 0) {
				DB::table("stories")->insert($data);
			}
			else {
				DB::table("stories")->where("id", $sid)->update($data);
			}
		}

		else if($action == "annual-events") {
			$aid = Input::get("aid");
			$data = json_decode(Input::get("data"), true);
			if(isset($_FILES['banner'])) {
				$bannerImg = $this->uploadFile($_FILES['banner'], 'images/uploads/annual-events/banners');
				if($bannerImg != -1) {
					$data['banner'] = $bannerImg;
				}
			}
			if($aid == 0) {
				DB::table("annual_events")->insert($data);
			}
			else {
				DB::table("annual_events")->where("id", $aid)->update($data);
			}
		}

		else if($action == "bicycle") {
			$bid = Input::get("bid");
			$data = json_decode(Input::get("data"), true);
			if($bid == 0) {
				// Insert a new event
				$bid = DB::table("bicycles")->insertGetId($data);
			}
			else {
				// Update bicycle
				DB::table("bicycles")->where("id", $bid)->update($data);
			}
			$gallery = [];
			for($i = 1; $i <= Input::get("galleryImageCount"); $i++) {
				if(isset($_FILES['galleryImage'.$i])) {
					$galleryImg = $this->uploadFile($_FILES['galleryImage'.$i], 'images/uploads/bicycles');
					if($galleryImg != -1) {
						$gallery[] = ["bid" => $bid, "image" => $galleryImg];
					}
				}
			}
			if(count($gallery)) {
				DB::table("bicycle_photos")->insert($gallery);
			}
		}

		else if($action == "delete-gallery-image") {
			$img = DB::table("event_gallery")->where("id", Input::get("id"))->first();
			DB::table("event_gallery")->where("eid", Input::get("eid"))->where("id", Input::get("id"))->delete();
			unlink('images/uploads/weekend-events/gallery/'.$img->image);
		}

		else if($action == "delete-bicycle-image") {
			$img = DB::table("bicycle_photos")->where("id", Input::get("id"))->first();
			DB::table("bicycle_photos")->where("bid", Input::get("bid"))->where("id", Input::get("id"))->delete();
			unlink('images/uploads/bicycles/'.$img->image);
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
