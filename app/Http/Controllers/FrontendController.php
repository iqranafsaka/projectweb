<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Kategori;
use App\Artikel;

class FrontendController extends Controller
{
    public function index(){
        $artikel = Artikel::orderBy('created_at', 'desc')->get();
        return view('frontend.index', compact('artikel'));
    } 

    public function about(){
        return view('frontend.about');
    }
    // public function indexcomu(){
    //     $artikel = Artikel::with('tag', 'kategori', 'user')->get();
    //     return view('frontend.indexcomu', compact('artikel'));
    // } 
    //Cek

    
    public function blog(){
        $artikel = Artikel::orderBy('created_at', 'desc')->paginate(2);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.posts', compact('artikel', 'kategori', 'tag'));
    }

    public function singleblog(Artikel $artikel){
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.single-post', compact('artikel', 'kategori', 'tag'));
    }

    public function blogtag(Tag $tag){
        $artikel = $tag->Artikel()->latest()->paginate(5);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.posts', compact('artikel', 'kategori', 'tag'));
    }

    public function blogkategori(Kategori $kategori){
        $artikel = $kategori->Artikel()->latest()->paginate(5);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.posts', compact('artikel','kategori', 'tag'));
    }
}
