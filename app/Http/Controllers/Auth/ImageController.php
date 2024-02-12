<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;


class ImageController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request)
    {
        $request->validate([
            'file_input' => 'required|mimes:jpg,png,jpeg|max:400',
        ]);
        if ($request->file('file_input')){
            $image = $request->file('file_input');
            $name = hash('sha256', time() . $image->getClientOriginalName()) . ".png";
            $image->storeAs('uploads/users', $name, 'public');
            $manager = new ImageManager(new Driver());
            $imageR = $manager->read(Storage::disk('public')->get('uploads/users/' . $name));
            $imageR->scaleDown(200); //cambiar esto para ajustar el reescalado de la imagen
            $rute = Storage::path('public/uploads/users/' . $name);
            $imageR->save($rute);

            $request->user()->update(['image'=>$name]);
            return back()->with('status', 'image-updated');
        }else{
            return back()->with('status', 'image-noupdated');

        }


    }
}
