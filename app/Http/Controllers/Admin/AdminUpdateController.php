<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminUpdateController extends Controller
{
    public function show()
    {
        $dataUsers = User::all('id', 'name', 'email', 'updated_at');
        $data = array();
        foreach ($dataUsers as $user)
            $data[] = [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'updated_at' => $user->updated_at,
            ];
        return view('allUsers')->with('data', $data);
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
