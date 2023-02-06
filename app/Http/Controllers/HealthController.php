<?php

namespace App\Http\Controllers;

use App\Category;
use App\Health;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $healths = Post::where('type', 2)->get();
        return view('admin.health.index', ['healths' => $healths]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHealthForUser(Request $request)
    {
        if (empty($request->get('category'))) {
            $healths = Post::orderBy('id', 'DESC')->where('type', 2)->paginate(5);
        } else {
            $healths = Post::orderBy('id', 'DESC')->where('type', 2)->where('category_id', $request->get('category'))->paginate(5);
        }
        $categories = Category::all();
        return view('user.page.health_information', ['healths' => $healths, 'categories' => $categories]);
    }

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function getPostForUserMenu1()
    // {
    //     $posts = DB::table('posts')->paginate(5);
    //     $categories = Category::all();
    //     return view('user.page.expert_question_and_answer', ['posts' => $posts, 'categories' => $categories]);
    // }

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function getPostForUserMenu2()
    // {
    //     $posts = DB::table('posts')->paginate(5);
    //     $categories = Category::all();
    //     return view('user.page.health_information', ['posts' => $posts, 'categories' => $categories]);
    // }

    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function getPostForUserMenu3()
    // {
    //     $posts = DB::table('posts')->paginate(5);
    //     $categories = Category::all();
    //     return view('user.page.customer_story', ['posts' => $posts, 'categories' => $categories]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHealthDetailForUser($id)
    {
        $health = Post::find($id);
        $categories = Category::all();
        return view('user.page.health_detail', ['health' => $health, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.health.create', ['categories' => $categories]);
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
                'image.max' => 'Kích thước file quá lớn (10MB tối đa)!'
            ]
        );

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $health = Health::create($data);
        $image = $request->file('image');
        // $image->storeAs('/public/storage/images/post/',$post->id.'.png', 'public');
        $image->move('public/storage/images/health',$health->id.'.png');

        return redirect(route('admin.health'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $health = Post::find($id);
        if (!$health) {
            abort(404);
        }
        $categories = Category::all();
        return view('admin.health.show', ['health' => $health, 'categories' => $categories]);
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
                'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:10240']
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
                'image.max' => 'Kích thước file quá lớn (10MB tối đa)!'
            ]
        );

        $health = Post::find($id);
        if (!$health) {
            abort(404);
        }

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $health->update($data);
        if (isset($data['image'])) {
            $image = $request->file('image');
            if (file_exists(public_path() . 'public/storage/images/health/'.$health->id.'.png'))
                unlink('public/storage/images/health/'.$health->id.'.png');
            $image->move('public/storage/images/health',$health->id.'.png');
        }

        return redirect(route('admin.health'));
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
        return redirect()->route('admin.health');
    }
}
