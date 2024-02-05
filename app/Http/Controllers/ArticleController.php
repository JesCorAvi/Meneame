<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('articles.index', ["articles"=>Article::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'file_input' => 'required|mimes:jpg,png,jpeg|max:400',
        ]);

        $image = $request->file('file_input');
        $name = hash('sha256', time() . $image->getClientOriginalName()) . ".png";
        $image->storeAs('uploads/articles', $name, 'public');

        $manager = new ImageManager(new Driver());
        $imageR = $manager->read(Storage::disk('public')->get('uploads/articles/' . $name));
        $imageR->scaleDown(400); //cambiar esto para ajustar el reescalado de la imagen
        $rute = Storage::path('public/uploads/articles/' . $name);
        $imageR->save($rute);

        Article::create([
        'title' => $request->title,
        'description' => $request->description,
        'link' => $request->link,
        'image' => $name,
        'user_id' => auth()->id()]);
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', ['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $article->update(['title'=>$request->title]);
        $article->update(['description'=>$request->description]);
        $article->update(['link'=>$request->link]);
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        Article::destroy($article->id);
        return redirect()->route('articles.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
