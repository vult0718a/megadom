<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Health;
use App\Story;
use App\Expert;
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
    public function getPostForUser(Request $request)
    {
        if (empty($request->get('category'))) {
            $posts = Post::orderBy('created_at', 'DESC')->paginate(5);
        } else {
            $posts = Post::orderBy('created_at', 'DESC')->where('category_id', $request->get('category'))->paginate(5);
        }
        $categories = Category::all();
        return view('user.page.post', ['posts' => $posts, 'categories' => $categories]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPostForUserMenu1()
    {
        $posts = DB::table('posts')->paginate(5);
        $categories = Category::all();
        return view('user.page.expert_question_and_answer', ['posts' => $posts, 'categories' => $categories]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPostForUserMenu2()
    {
        $posts = DB::table('posts')->paginate(5);
        $categories = Category::all();
        return view('user.page.health_information', ['posts' => $posts, 'categories' => $categories]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPostForUserMenu3()
    {
        $posts = DB::table('posts')->paginate(5);
        $categories = Category::all();
        return view('user.page.customer_story', ['posts' => $posts, 'categories' => $categories]);
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
                'type' => ['required', 'in:1,2,3'],
                'image' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240']
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
                // 'image.image' => 'Ảnh không hợp lệ!',
                'image.mimes' => 'Không phải ảnh!',
                'image.max' => 'Kích thước file quá lớn (10MB tối đa)!',
                'type.required' => 'Cần phải thêm thể loại!',
                'type.in' => 'Thể loại không chính xác'
            ]
        );

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $image = $request->file('image');
        $data['extension'] = $image->getClientOriginalExtension();
        $post = Post::create($data);
        // $image->storeAs('/public/storage/images/post/',$post->id.'.png', 'public');
        $image->move('public/storage/images/post',$post->id.'.'.$data['extension']);

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
                'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:10240'],
                'type' => ['required', 'in:1,2,3']
            ],
            [
                'title.required' => 'Cần nhập tiêu đề!',
                'title.max' => 'Tiêu đề tối đa 255 ký tự!',
                'short_content.required' => 'Cần nhập nội dung thu gọn!',
                'content.required' => 'Cần nhập nội dung!',
                'category_id.required' => 'Danh mục không được trống!',
                'category_id.exists' => 'Danh mục không hợp lệ!',
                // 'image.image' => 'Ảnh không hợp lệ!',
                'image.mimes' => 'Không phải ảnh!',
                'image.max' => 'Kích thước file quá lớn (10MB tối đa)!',
                'type.required' => 'Cần phải thêm thể loại!',
                'type.in' => 'Thể loại không chính xác'
            ]
        );

        $post = Post::find($id);
        if (!$post) {
            abort(404);
        }

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        if (isset($data['image'])) {
            $image = $request->file('image');
            $data['extension'] = $image->getClientOriginalExtension();
            if (file_exists('public/storage/images/post/'.$post->id.'.'.$post->extension)) {
                unlink('public/storage/images/post/'.$post->id.'.'.$post->extension);
            }
            $image->move('public/storage/images/post',$post->id.'.'.$data['extension']);
        }
        $post->update($data);

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
        Post::destroy($id);
        return redirect()->route('admin.post');
    }
}
