<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserDataController extends Controller
{
    public function show()
    {
        $userRole = Auth::user()->role;

        return view('info');
    }

    public function update()
    {

        //update data in db

    }

    public function create(Request $request)
    {
        $user = Auth::user();
        $data = $request->all();

        //save data to db
    }
}
