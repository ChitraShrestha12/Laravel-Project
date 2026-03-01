<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser()
    {
        $users = student::paginate(3);
        return view('pages.home', compact('users'));
    }

    public function addForm()
    {
        return view('pages.add');
    }

    public function addUser(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'address' => 'required',
            'class' => 'required',
            'phone' => ['required', 'unique:students,phone_number']
        ]);
        $user = student::create([
            'name' => $req->name,
            'address' => $req->address,
            'class' => $req->class,
            'phone_number' => $req->phone,
        ]);
        if (!$user) {
            return "Something went wrong!";
        }
        return redirect()->route('home');
    }

    public function update($id)
    {
        $user = student::find($id);
        return view('pages.update', compact('user'));
    }

    public function updateUser(Request $req)
    {
        $user = student::find($req->id)->update([
            'name' => $req->name,
            'address' => $req->address,
            'class' => $req->class,
            'phone_number' => $req->phone,
        ]);
        if (!$user) {
            return "Something went wrong!";
        }
        return redirect()->route('home');
    }

    public function deleteUser($id)
    {
        $user = student::find($id)->delete();
        if (!$user) {
            return "Something went wrong!";
        }
        return redirect()->route('home');
    }
}
