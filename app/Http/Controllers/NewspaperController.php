<?php

namespace App\Http\Controllers;

use App\Category;
use App\Newspaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewspaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newspapers = Newspaper::all();
        return view('admin.newspaper.index', ['newspapers' => $newspapers]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNewspaperForUser()
    {
        // $newspapers = DB::table('newspapers')->paginate(3);
        $newspapers = Newspaper::orderBy('id', 'DESC')->paginate(3);
        return view('user.page.newspaper', ['newspapers' => $newspapers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newspaper.create');
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
                'url' => ['required', 'max:1000'],
                'short_content' => ['required'],
                'content' => ['required'],
                'image' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240']
            ],
            [
                'title.required' => 'Cần nhập tiêu đề!',
                'title.max' => 'Tiêu đề tối đa 255 ký tự!',
                'short_content.required' => 'Cần nhập nội dung thu gọn!',
                'content.required' => 'Cần nhập nội dung!',
                'image.required' => 'Ảnh không được để trống!',
                'image.image' => 'Ảnh không hợp lệ!',
                'image.mimes' => 'Ảnh không hợp lệ về định dạng!',
                'image.max' => 'Ảnh không hợp lệ về dưng lượng!',
            ]
        );
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $image = $request->file('image');
        $data['extension'] = $image->getClientOriginalExtension();
        $newspaper = Newspaper::create($data);
        // $image->storeAs('/public/storage/images/newspaper/', 'image.png', 'public');
        $image->move('public/storage/images/newspaper',$newspaper->id.'.'.$data['extension']);

        return redirect(route('admin.newspaper'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newspaper = Newspaper::find($id);
        if (!$newspaper) {
            abort(404);
        }
        return view('admin.newspaper.show', ['newspaper' => $newspaper]);
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
                'url' => ['required', 'max:1000'],
                'short_content' => ['required'],
                'content' => ['required'],
                'image' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240']
            ],
            [
                'title.required' => 'Cần nhập tiêu đề!',
                'title.max' => 'Tiêu đề tối đa 255 ký tự!',
                'short_content.required' => 'Cần nhập nội dung thu gọn!',
                'content.required' => 'Cần nhập nội dung!',
                'image.required' => 'Ảnh không hợp lệ!',
                'image.mimes' => 'Ảnh không hợp lệ!',
                'image.max' => 'Ảnh không hợp lệ!',
            ]
        );

        $newspaper = Newspaper::find($id);
        if (!$newspaper) {
            abort(404);
        }
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        if (isset($data['image'])) {
            $image = $request->file('image');
            $data['extension'] = $image->getClientOriginalExtension();
            if (file_exists('public/storage/images/newspaper/'.$newspaper->id.'.'.$newspaper->extension)) {
                unlink('public/storage/images/newspaper/'.$newspaper->id.'.'.$newspaper->extension);
            }
            $image->move('public/storage/images/newspaper',$newspaper->id.'.'.$data['extension']);
        }
        $newspaper->update($data);

        return redirect(route('admin.newspaper'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Newspaper::destroy($id);
        return redirect()->route('admin.newspaper');
    }
}
