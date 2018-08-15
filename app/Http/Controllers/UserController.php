<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract\Repositories\User\UserRepository as User;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function index()
    {
        $users = $this->user->all();

        return view('user.user', compact('users'));
    }


    public function show($id)
    {
        return $this->user->show($id);
    }
}
