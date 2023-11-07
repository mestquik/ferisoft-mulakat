<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('category')->get();
        return view('pages.post',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {        
        $categories = Category::get();
        return view('pages.create-post',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([
            'header'=>$request->post_header,
            'text'=>$request->post_text,
            'category_id'=>$request->category_id,
        ]);
        return redirect()->route('post.create')->withSuccess( 'Yazı Başarıyla oluşturuldu!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);
        $categories = Category::get();
        return view('pages.edit-post',compact('post','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);

        $post->update([
            'header'=>$request->post_header,
            'text'=>$request->post_text,
            'category_id'=>$request->category_id,
        ]);
        return redirect()->route('post.index')->withSuccess( 'Yazı Başarıyla güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.index')->withSuccess( 'Yazı Başarıyla Silindi!');
    }
}
