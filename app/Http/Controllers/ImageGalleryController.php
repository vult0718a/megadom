<?php

namespace App\Http\Controllers;

use App\Category;
use App\ImageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imageGallerys = ImageGallery::all();
        return view('admin.image_video.index', ['imageGallerys' => $imageGallerys]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getImageGalleryForUser()
    {
        $imageGallerys = DB::table('image_gallerys')->get();
        return view('user.page.picture_video', ['imageGallerys' => $imageGallerys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.image_video.create');
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
                'image' => ['required', 'mimes:jpeg,png,jpg,gif,svg', 'max:10240']
            ],
            [
                'image.required' => 'Ảnh không được để trống!',
                // 'image.image' => 'Ảnh không hợp lệ!',
                'image.mimes' => 'Không phải ảnh!',
                'image.max' => 'Kích thước file quá lớn (10MB tối đa)!'
            ]
        );
        $imageGallery = new ImageGallery();
        if($request->hasFile('image')) {   //kiem tra xem file imagecos được chọn hay ko

            // get file
            $file = $request->file('image');
            //get ten
            $filename = time().'_'.$file->getClientOriginalName();
            // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
            //duong dan upload
            $path_upload = 'upload/image_gallery/';
            //upload file
            $request->file('image')->move($path_upload,$filename);

            $imageGallery->image = $path_upload.$filename;
        }
        $imageGallery->save();
        return redirect(route('admin.image_video'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imageGallery = ImageGallery::find($id);
        if (!$imageGallery) {
            abort(404);
        }
        return view('admin.image_video.show', ['imageGallery' => $imageGallery]);
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
                'image' => ['mimes:jpeg,png,jpg,gif,svg', 'max:10240']
            ],
            [
                // 'image.image' => 'Ảnh không hợp lệ!',
                'image.mimes' => 'Không phải ảnh!',
                'image.max' => 'Kích thước file quá lớn (10MB tối đa)!'
            ]
        );

        $imageGallery = ImageGallery::find($id);
        if (!$imageGallery) {
            abort(404);
        }

        if($request->hasFile('new_image')) {   //kiem tra xem file imagecos được chọn hay ko
            // xoa file cu
            @unlink(public_path($imageGallery->image));
            // get file moi
            $file = $request->file('new_image');
            //get ten
            $filename = time().'_'.$file->getClientOriginalName();
            // $file->getClientOriginalName()   tương ung vs ten anh hien cua minh
            //duong dan upload
            $path_upload = 'upload/image_gallery/';
            //upload file
            $request->file('new_image')->move($path_upload,$filename);

            $imageGallery->image = $path_upload.$filename;
        }
        $imageGallery->save();

        return redirect(route('admin.image_video'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ImageGallery::destroy($id);
        return redirect()->route('admin.image_video');
    }
}
