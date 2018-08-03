<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showform extends Controller{
	public function form(Request $request)
	{
		$name = $request->input('name');
		$dob = $request->input('dob');
		$gender = $request->input('gender');
		echo nl2br("Name: $name \n Date of birth: $dob \nGender: $gender");

	}
}