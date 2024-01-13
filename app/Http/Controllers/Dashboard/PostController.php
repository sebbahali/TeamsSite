<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $posts = Post::when(request('search'), function ($query) {
            return $query->where('title', 'like', '%' . request('search') . '%');
        })->paginate(12);

        return view('dashboard.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'unique:posts'],
            'image' => ['required', 'image', 'max:5000'],
            'body'  => ['required'],
        ]);

        $imagePath = $request->file('image')->store('posts', 'clubs');

        $exists = Storage::disk('clubs')->exists($imagePath);

        $post = Post::create([
            'id' => 4,
            'title' => $request->input('title'),
            'slug' => str($request->input('title'))->slug('-', 'ar'),
            'body' => $request->input('body'),
            'image' => $imagePath,
        ]);

        session()->flash('success_message', 'تم اضافة الخبر بنجاح');

        return to_route('dashboard.posts.show', $post->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  Post  $post
     * @return View
     */
    public function show(Post $post): View
    {
        return view('dashboard.posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => ['required', 'string', "unique:posts,id,$post->id"],
            'image' => ['nullable', 'image', 'max:5000'],
            'body'  => ['required'],
        ]);


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'clubs');
        } else {
            $imagePath = $post->image;
        }

        $post->title = $request->input('title');
        $post->slug = str($request->input('title'))->slug('-', 'ar');
        $post->image = $imagePath;
        $post->body = $request->input('body');
        $post->save();

        session()->flash('success_message', 'تم تعديل الخبر بنجاح');

        return to_route('dashboard.posts.show', $post->slug);
    }

    public function changeStatus(Post $post, int $status)
    {
        $post->status = $status;
        $post->save();

        session()->flash('success_message', 'تم تعديل حالة المنشور بنجاح');

        return to_route('dashboard.posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        session()->flash('success_message', 'تم حذف الخبر بنجاح');

        return to_route('dashboard.posts.index');
    }
}
