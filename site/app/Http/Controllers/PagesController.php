<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex () {
		return view('pages.welcome');
	}

	public function getContact() {

		$firstPassion = "Reading";
		$secondPassion = "YouTube";

		$passion = $firstPassion . " + " . $secondPassion;
		$email = "contact@rnfit.net";

		return view('pages/contact')->withPassion($passion)->withEmail($email);
	}

	public function getAbout() {

		$first = "Ramon";
		$last = "Nastase";
		$email = "contact@rnfit.net";
		$full = $first . " " . $last;

		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $full;

		return view('pages/about')->with("fullname", $full)->withData($data);
	}

}