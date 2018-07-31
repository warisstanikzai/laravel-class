<?php

namespace App\Http\Controllers\PublicPages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicPagesController extends Controller
{
    public function index()
    {
        return 'welcome page';
    }

    public function register(Request $request)
    {
        return $request;
    }
}
