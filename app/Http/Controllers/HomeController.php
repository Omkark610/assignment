<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function updateProfile(Request $request)
    {   
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $id = \Auth::id();
        $fileName = $id . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);
        
        
        $user = User::find($id);
        $user->image = $fileName;
        $user->save();

        return redirect()->route('profile')->with([
            'message' => 'User added successfully!', 
            'status' => 'success'
        ]);
    }
    
}
