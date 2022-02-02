<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;

/**
 * ユーザのプロフィール管理を行う
 */
class UserController extends Controller
{
    public function show($name)
    {
        $users = new User;
        $users = $users->get_user($name);

        return view('users.show', compact('users'));
    }
}
