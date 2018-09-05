<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
	// Get the public pages
    public function publicPages()
    {
    	return view('public-pages.welcome');
    }
}
