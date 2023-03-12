<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('admin.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user-> name = $request->name;
        $user-> email = $request->email;
        $user-> password = Hash::make($request->password);
        $user-> Status = $request->Status;
        $user-> UserType = $request->UserType;
        $user ->save();
        return view('admin.dashboard');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('admin.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $user = User::findorfail($id);
        return view('admin.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $user = User::findorfail($id);
        // return $users;
        $user->Status = $request->Status;
        $user->UserType = $request->UserType;
        $user->save();
        return view('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::findorfail($id)->delete();
        return redirect(view('admin.dashboard'));

    }
}
