<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $image = $request->file('file_input');
        if(isset($image)){
            $name = hash('sha256', time() . $image->getClientOriginalName()) . ".png";
            $image->storeAs('uploads/users', $name, 'public');
            $manager = new ImageManager(new Driver());
            $imageR = $manager->read(Storage::disk('public')->get('uploads/users/' . $name));
            $imageR->scaleDown(200); //cambiar esto para ajustar el reescalado de la imagen
            $rute = Storage::path('public/uploads/users/' . $name);
            $imageR->save($rute);
            $row = "storage/uploads/users/" . $name;

        }else{
            $name = "default.png";
            $row = $name;
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'image' => $row,


        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
