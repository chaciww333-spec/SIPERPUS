<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilController extends Controller
{
    public function index()
    {
        $user = Auth()->user();
        return view('pages.profil.index', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id,
            'password' => 'confirmed|min:8|nullable'
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        if($request->profil){
            $user->profil = bcrypt($request->profil);
        }
        $user->save();

        return redirect()->route('profil.index')->with('succes', "Profil berhasil diubah");
    }
}
