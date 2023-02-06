<?php

namespace App\Http\Controllers;

use App\Category;
use App\Story;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storys = Post::where('type', 3)->get();
        return view('admin.story.index', ['storys' => $storys]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getStoryForUser(Request $request)
    {
        if (empty($request->get('category'))) {
            $storys = Post::orderBy('id', 'DESC')->where('type', 3)->paginate(5);
        } else {
            $storys = Post::orderBy('id', 'DESC')->where('type', 3)->where('category_id', $request->get('category'))->paginate(5);
        }
        $categories = Category::all();
        return view('user.page.customer_story', ['storys' => $storys, 'categories' => $categories]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getStoryDetailForUser($id)
    {
        $story = Post::find($id);
        $categories = Category::all();
        return view('user.page.story_detail', ['story' => $story, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.story.customer_story', ['categories' => $categories]);
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
        $story = Story::create($data);
        $image = $request->file('image');
        // $image->storeAs('/public/storage/images/post/',$post->id.'.png', 'public');
        $image->move('public/storage/images/story',$story->id.'.png');

        return redirect(route('admin.story'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $story = Post::find($id);
        if (!$story) {
            abort(404);
        }
        $categories = Category::all();
        return view('admin.story.show', ['story' => $story, 'categories' => $categories]);
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

        $story = Post::find($id);
        if (!$story) {
            abort(404);
        }

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $story->update($data);
        if (isset($data['image'])) {
            $image = $request->file('image');
            if (file_exists(public_path() . 'public/storage/images/story/'.$story->id.'.png'))
                unlink('public/storage/images/story/'.$story->id.'.png');
            $image->move('public/storage/images/story',$story->id.'.png');
        }

        return redirect(route('admin.story'));
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
        return redirect()->route('admin.story');
    }
}
