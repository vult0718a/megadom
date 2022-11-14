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
                'title.required' => 'Cần nhập tiêu đề!',
                'title.max' => 'Tiêu đề tối đa 255 ký tự!',
                'short_content.required' => 'Cần nhập nội dung thu gọn!',
                'short_content.max' => 'Nội dung thu gọn tối đa 255 ký tự!',
                'content.required' => 'Cần nhập nội dung!',
                'category_id.required' => 'Danh mục không được trống!',
                'category_id.exists' => 'Danh mục không hợp lệ!',
                'image.required' => 'Ảnh không được để trống!',
                'image.image' => 'Ảnh không hợp lệ!',
                'image.mimes' => 'Ảnh không hợp lệ!',
                'image.max' => 'Ảnh không hợp lệ!',
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
                'short_content' => ['required', 'max:255'],
                'content' => ['required'],
                'category_id' => ['required', 'exists:categories,id'],
                'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240']
            ],
            [
                'title.required' => 'Cần nhập tiêu đề!',
                'title.max' => 'Tiêu đề tối đa 255 ký tự!',
                'short_content.required' => 'Cần nhập nội dung thu gọn!',
                'short_content.max' => 'Nội dung thu gọn tối đa 255 ký tự!',
                'content.required' => 'Cần nhập nội dung!',
                'category_id.required' => 'Danh mục không được trống!',
                'category_id.exists' => 'Danh mục không hợp lệ!',
                'image.image' => 'Ảnh không hợp lệ!',
                'image.mimes' => 'Ảnh không hợp lệ!',
                'image.max' => 'Ảnh không hợp lệ!',
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
