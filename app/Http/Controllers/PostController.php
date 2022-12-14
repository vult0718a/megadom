<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', ['posts' => $posts]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPostForUser()
    {
        $posts = DB::table('posts')->paginate(5);
        $categories = Category::all();
        return view('user.page.post', ['posts' => $posts, 'categories' => $categories]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPostDetailForUser($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('user.page.post_detail', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => ['required', 'max:255'],
                'short_content' => ['required', 'max:255'],
                'content' => ['required'],
                'category_id' => ['required', 'exists:categories,id'],
                'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240']
            ],
            [
                'title.required' => 'C???n nh???p ti??u ?????!',
                'title.max' => 'Ti??u ????? t???i ??a 255 k?? t???!',
                'short_content.required' => 'C???n nh???p n???i dung thu g???n!',
                'short_content.max' => 'N???i dung thu g???n t???i ??a 255 k?? t???!',
                'content.required' => 'C???n nh???p n???i dung!',
                'category_id.required' => 'Danh m???c kh??ng ???????c tr???ng!',
                'category_id.exists' => 'Danh m???c kh??ng h???p l???!',
                'image.required' => '???nh kh??ng ???????c ????? tr???ng!',
                'image.image' => '???nh kh??ng h???p l???!',
                'image.mimes' => '???nh kh??ng h???p l???!',
                'image.max' => '???nh kh??ng h???p l???!',
            ]
        );

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $post = Post::create($data);
        $image = $request->file('image');
        $image->storeAs('images/post/'. $post->id .'/', 'image.png', 'public');

        return redirect(route('admin.post'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            abort(404);
        }
        $categories = Category::all();
        return view('admin.post.show', ['post' => $post, 'categories' => $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => ['required', 'max:255'],
                'short_content' => ['required'],
                'content' => ['required'],
                'category_id' => ['required', 'exists:categories,id'],
                'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240']
            ],
            [
                'title.required' => 'C???n nh???p ti??u ?????!',
                'title.max' => 'Ti??u ????? t???i ??a 255 k?? t???!',
                'short_content.required' => 'C???n nh???p n???i dung thu g???n!',
                'content.required' => 'C???n nh???p n???i dung!',
                'category_id.required' => 'Danh m???c kh??ng ???????c tr???ng!',
                'category_id.exists' => 'Danh m???c kh??ng h???p l???!',
                'image.image' => '???nh kh??ng h???p l???!',
                'image.mimes' => '???nh kh??ng h???p l???!',
                'image.max' => '???nh kh??ng h???p l???!',
            ]
        );

        $post = Post::find($id);
        if (!$post) {
            abort(404);
        }

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $post->update($data);
        if (isset($data['image'])) {
            $image = $request->file('image');
            $image->storeAs('images/post/'. $post->id .'/', 'image.png', 'public');
        }

        return redirect(route('admin.post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
