<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;


class MainController extends Controller
{
    public function index($username)
    {
        $data = User::where('username', $username)->firstOrFail();

        return view('landing', compact('data'));
    }

    public function member($username)
    {
        $data = User::where('username', $username)->firstOrFail();

        return view('profile', compact('data'));
    }

    /**Update the user's profile information.*/
    public function update(Request $request, $id)
    {
        $user = User::find(Auth::id());
        $request->validate([
            'username' => 'required|regex:/^[a-zA-Z0-9]+$/|unique:users,username,' . $user->id,
            'name' => 'required|unique:users,name,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|unique:users,phone,' . $user->id,
        ]);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $phoneNumber = $request->input('phone');
        if (str_starts_with($phoneNumber, '0')) {
            $phoneNumber = '62' . substr($phoneNumber, 1);
        }

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $phoneNumber;
        $user->about = $request->about;
        $user->update();

        return redirect()->back()->with(['pesan' => 'Profile updated successfully', 'level-alert' => 'alert-success']);
    }

    /**Update the user's profile information.*/
    public function sosmed(Request $request, $id)
    {
        $user = User::find(Auth::id());

        $user->instagram = $request->instagram;
        $user->facebook = $request->facebook;
        $user->youtube = $request->youtube;
        $user->twitter = $request->twitter;
        $user->update();

        return redirect()->back()->with(['pesan' => 'Sosial Media updated successfully', 'level-alert' => 'alert-success']);
    }

    public function avatar(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $image = $request->file('avatar');

        if (!Storage::disk('public')->exists('profile')) {
            Storage::disk('public')->makeDirectory('profile');
        }

        $manager = new ImageManager(new Driver());
        $imageName  = 'avatar_' . time() . '.' . $image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img->toWebp(90)->save(base_path('public/storage/profile/' . $imageName));
        $save_url = 'profile/' . $imageName;

        $client = User::find(Auth::id());
        $client->avatar = $imageName;
        $client->update();

        return redirect()->back()->with(['pesan' => 'Avatar updated successfully', 'level-alert' => 'alert-success']);
    }

    /**Update the user's user password.*/
    public function password(Request $request, $id)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password, $hashedPassword)) {
            if (!Hash::check($request->new_password, $hashedPassword)) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->new_password);
                $user->save();
                Auth::logout();
                return redirect()->route('login')->with(['pesan' => 'Password updated successfully', 'level-alert' => 'alert-success']);
            } else {
                return redirect()->back()->with(['pesan' => 'New password cannot be the same as old password', 'level-alert' => 'alert-danger']);
            }
        } else {
            return redirect()->back()->with(['pesan' => 'Current password not match', 'level-alert' => 'alert-danger']);
        }
    }

    /**Delete the user's account.*/
    public function destroy(Request $request, $id)
    {
        return redirect()->back()->with([
            'pesan' => 'Please contact admin', 'level-alert' => 'alert-danger'
        ]);
    }

    public function admin()
    {
        return view('admin');
    }
    public function status(Request $request)
    {
        $data = User::where('username', $request->username)->firstOrFail();

        $data->status = true;
        $data->update();

        return redirect()->back()->with(['pesan' => 'User Aktif', 'level-alert' => 'alert-success']);
    }
}
