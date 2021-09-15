<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(PostRequest $request)
    {
        $picture = $request->file('picture');
        $path = null;
        $big_picture = $request->file('big_picture');
        $big_path = null;
        if($big_picture){
            $big_path = $big_picture->store('public/big_posts');
            $big_path = Str::replace('public', '',$big_path);
        }
        if($picture){
            $path = $picture->store('public/posts');
            $path = Str::replace('public', '',$path);
        }

        $post = Post::create([
            'title' => $request->title,
            'text' => $request->text,
            'created_by' => $request->created_by,
            'picture'=>$path,
            'big_picture'=>$big_path
        ]);
        $post->save();
        return redirect(route('admin.post.index'))->with('success','Post has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(PostRequest $request, Post $post)
    {
        $picture = $request->file('picture');
        $path = null;
        $big_picture = $request->file('big_picture');
        $big_path = null;
        if($big_picture){
            $big_path = $big_picture->store('public/big_posts');
            $big_path = Str::replace('public', '',$big_path);
        }
        if($picture){
            $path = $picture->store('public/posts');
            $path = Str::replace('public', '',$path);
        }

        $input = [
          'title'=>$request->title,
          'text'=>$request->text,
          'created_by'=>$request->created_by,
          'picture'=>$path,
          'big_picture'=>$big_path
        ];
        $post->update($input);
        return redirect(route('admin.post.index'))->with('success','Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('admin.post.index'))->with('success','Post has been deleted');
    }
}
